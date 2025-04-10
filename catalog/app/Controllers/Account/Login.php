<?php

namespace Catalog\Controllers\Account;

use Catalog\Controllers\BaseController;
use Catalog\Models\Account\CustomerModel;
use Catalog\Models\Account\ActivityModel;

class Login extends BaseController
{
    public function index()
    {
        if ($this->customer->isLogged()) {
            return redirect()->to('account/dashboard');
        }

        $this->document->setTitle(lang('account/login.heading_title'));

        $data['breadcrumbs'] = [];
        
        $data['breadcrumbs'][] = [
            'text' => lang($this->locale . '.text_home'),
            'href' => base_url(),
        ];

        $data['breadcrumbs'][] = [
            'text' => lang('account/login.heading_title'),
            'href' => url_to('account.login'),
        ];

        $data['register'] = sprintf(lang('account/login.text_register'), url_to('account.register'));
        $data['forgotton'] = base_url('account/forgotten');
        $data['login'] = url_to('account.authenticate');
        
        $data['header']        = view_cell("\Catalog\Controllers\Common\Header::index");
        $data['menu']          = view_cell("\Catalog\Controllers\Common\Menu::index");
        $data['footer']        = view_cell("\Catalog\Controllers\Common\Footer::index");

        lang('account/login');

        return $this->template->render('account/login', $data);
    }

    public function authenticate()
    {
        $json = [];
    
        if ($this->request->is('ajax')) {
            if (! $this->validate([
                'email'    => 'required|valid_email',
                'password' => 'required|min_length[4]',
            ])) {
                $json['error_warning'] = lang("{$this->locale}.error.form");
                $json['validator'] = $this->validator->getErrors();
            }

            if ($this->request->is('post')) {
                $customerModel = new CustomerModel();
                // 2-step verification
                if ($this->customer->checkTwoStepVerification($this->request->getPost('email', FILTER_SANITIZE_EMAIL))) {
                    $this->customer->editAccessCode($this->request->getPost('email', FILTER_SANITIZE_EMAIL), random_string('numeric', 7));
                    $json['redirect'] = route_to('account.verify');
                }

                if ($customerModel->getTotalCustomersByEmail($this->request->getPost('email', FILTER_SANITIZE_EMAIL)) == 0) {
                    $json['error_warning'] = lang("account/login.error.not_found");
                }

                if (!$json && (! $this->customer->login($this->request->getPost('email', FILTER_SANITIZE_EMAIL), $this->request->getPost('password', FILTER_SANITIZE_STRING)))) {
                    $json['error_warning'] = lang("account/login.error.warning");
                    $customerModel->addLoginAttempt($this->request->getPost('email', FILTER_SANITIZE_EMAIL), $this->request->getIPAddress());
                }
                
                // Check how many login attempts have been made.
                $login_info = $customerModel->getLoginAttempts($this->request->getPost('email', FILTER_SANITIZE_EMAIL));
                if ($login_info && ($login_info['total'] >= $this->registry->get('config_login_attempts')) && strtotime('-1 hour') < $login_info['date_modified']) {
                    $json['error_warning'] = lang('account/login.error.attempts');
                }
            }

            // continue if logged
            if (! $json) {
                $customerModel->deleteLoginAttempts($this->request->getPost('email', FILTER_SANITIZE_EMAIL));
                // check for any saved redirect url
                if ($this->session->get('redirect_url')) {
                    $json['redirect'] = (string) $this->session->get('redirect_url');
                } elseif (! is_null($this->request->getCookie(config('App')->cookiePrefix . 'redirect_url'))) {
                    $json['redirect'] = base64_decode($this->request->getCookie(config('App')->cookiePrefix . 'redirect_url', FILTER_SANITIZE_STRING));
                } else {
                    $json['redirect'] = url_to('account.dashboard');
                }
            }
        }
        return $this->response->setJSON($json);
    }


    //--------------------------------------------------------------------
}
