<?php

namespace Admin\Controllers\Extension;

use Admin\Controllers\BaseController;
use Admin\Models\User\UserGroupModel;
use Shared\Models\Setting\SettingModel;
use Shared\Models\Setting\ExtensionModel;

class Analytics extends BaseController
{
    public function install()
    {
        $json = [];

        if (!$this->user->hasPermission('modify', 'extension/analytics')) {
            $json['error'] = lang('extension/analytics.permission');
        }

        if (! $json && $this->request->isAJAX()) {
            $extensionsModel = new ExtensionModel();
            $extensionsModel->install('analytics', $this->request->getVar('extension'));

            $userGroupModel = new UserGroupModel();

            $userGroupModel->addPermission($this->user->getGroupId(), 'access', 'extensions/analytics/' . $this->request->getVar('extension'));
            $userGroupModel->addPermission($this->user->getGroupId(), 'modify', 'extensions/analytics/' . $this->request->getVar('extension'));

            $settingModel = new SettingModel();
            $settingModel->editSetting('analytics_' . $this->request->getVar('extension'), ['analytics_' . $this->request->getVar('extension') . '_status' => 1]);

            // Call install Method is exists
            $class = 'Extensions\Controllers\analytics\\' . ucfirst($this->request->getVar('extension'));
            if (class_exists($class) && method_exists($class, 'install')) {
                $controller = new $class();
                $controller->install($this->request->getVar('extension'));
            }

            $json['success'] = lang('analytics/' . $this->request->getVar('extension') . '.text_success');
        }

        return $this->response->setJSON($json);
    }

    public function uninstall()
    {
        $json = [];

        if (! $this->user->hasPermission('modify', 'extension/analytics')) {
            $json['error'] = lang('extension/analytics.permission');
        }

        if (! $json && $this->request->isAJAX()) {
            $extensionsModel = new ExtensionModel();
            $extensionsModel->uninstall('analytics', $this->request->getVar('extension'));
            // Call uninstall Method is exists
            $class = 'Extensions\Controllers\Analytics\\' . ucfirst($this->request->getVar('extension'));
            if (class_exists($class) && method_exists($class, 'uninstall')) {
                $controller = new $class();
                $controller->uninstall($this->request->getVar('extension'));
            }

            $json['success'] = lang('analytics/' . $this->request->getVar('extension') . '.text_success');
        }

        return $this->response->setJSON($json);
    }

    public function index()
    {
        $this->document->setTitle(lang('extension/analytics.heading_title'));

        if ($this->session->getFlashdata('warning')) {
            $data['error_warning'] = $this->session->getFlashdata('warning');
        } else {
            $data['error_warning'] = '';
        }

        if ($this->session->getFlashdata('success')) {
            $data['success'] = $this->session->getFlashdata('success');
        } else {
            $data['success'] = '';
        }

        $extensionsModel = new ExtensionModel();

        $installedExtensions = $extensionsModel->getInstalled('analytics');

        foreach ($installedExtensions as $key => $value) {
            if (!is_file(APPPATH . 'Extensions/Controllers/Analytics/' . ucfirst($value) . '.php')) {
                $extensionsModel->uninstall('analytics', $value);
                unset($installedExtensions[$key]);
            }
        }

        $data['extensions'] = [];
        
        helper('filesystem');

        $files = directory_map(APPPATH . 'Extensions/Controllers/Analytics', 1);

        if ($files) {
            foreach ($files as $file) {
                $basename = basename($file, '.php');

                $data['extensions'][] = [
                    'name'       => lang('analytics/' . strtolower($basename) . '.heading_title'),
                    'status'     => ($this->registry->get('analytics_' . strtolower($basename) . '_status')) ? lang('en.text_enabled') : lang('en.text_disabled'),
                    'install'    => site_url('extension/analytics/install?user_token=' . $this->request->getVar('user_token') . '&extension=' . strtolower($basename)),
                    'uninstall'  => site_url('extension/analytics/uninstall?user_token=' . $this->request->getVar('user_token') . '&extension=' . strtolower($basename)),
                    'installed'  => in_array(strtolower($basename), $installedExtensions),
                    'edit'       => site_url('extensions/analytics/' . strtolower($basename) .'?user_token=' . $this->request->getVar('user_token')),
                ];
            }
        }

        $data['header']       = view_cell('\Admin\Controllers\Common\Header::index');
        $data['column_left']  = view_cell("\Admin\Controllers\Common\Column_left::index");
        $data['footer']       = view_cell('\Admin\Controllers\Common\Footer::index');

        lang('extension/analytics');

        return $this->template->render('extension/analytics', $data);
    }
    
    // --------------------------------------------------------------
}
