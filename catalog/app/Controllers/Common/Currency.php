<?php

namespace Catalog\Controllers\Common;

use Catalog\Controllers\BaseController;
use CodeIgniter\HTTP\URI;
use Shared\Models\Localisation\CurrencyModel;

class Currency extends BaseController
{
    public function index()
    {
        if ($this->request->getCookie(config('Cookie')->prefix . 'currency')) {
            $code = hex2bin($this->request->getCookie(config('Cookie')->prefix . 'currency'));
        } else {
            $code = $this->registry->get('config_currency');
        }

        $data['currency_code'] = $code;

        $uri = '';
        // get URI Object parts
        $path      = $this->request->getUri()->getPath();
        $query     = $this->request->getUri()->getQuery();
        $scheme    = $this->request->getUri()->getScheme();
        $authority = $this->request->getUri()->getAuthority();
        $fragment  = $this->request->getUri()->getFragment();
        
        $uri = URI::createURIString($scheme, $authority, $path, $query, $fragment);

        $data['currencies'] = [];

        $currencyModel = new CurrencyModel();
        $results = $currencyModel->getCurrencies();

        foreach ($results as $result) {
            if ($result['status']) {    
                $data['currencies'][] = [
                    'title'        => $result['title'],
                    'code'         => $result['code'],
                    'symbol_left'  => $result['symbol_left'],
                    'symbol_right' => $result['symbol_right'],
                    'href'         => base_url('common/currency/save?code=' . $result['code'] . '&redirect=' . urlencode($uri)),
                ];
            }
        }

        lang('common/currency');

        return $this->template->render('common/currency', $data);
    }

    public function save()
    {
        if ($this->request->getVar('code')) {
            $code = (string) $this->request->getVar('code');
        } else {
            $code = $this->registry->get('config_currency');
        }

        if ($this->request->getVar('redirect')) {
            $redirect = $this->request->getVar('redirect');
        } else {
            $redirect = '';
        }
        
        $cookie = [
            'name'     => 'currency',
            'value'    => bin2hex($code),
            'expire'   => '86500',
            'domain'   => config('Cookie')->domain,
            'path'     => config('Cookie')->path,
            'prefix'   => config('Cookie')->prefix,
            'secure'   => config('Cookie')->secure,
            'httponly' => config('Cookie')->httpOnly,
            'samesite' => config('Cookie')->SameSite
        ];

        $this->response->setCookie($cookie);

        if ($redirect && substr($redirect, 0, strlen(base_url())) == base_url()) {
            return redirect()->to($redirect)->withCookies();
        } else {
            return redirect('/')->withCookies();
        }
    }

    //--------------------------------------------------------------------
}
