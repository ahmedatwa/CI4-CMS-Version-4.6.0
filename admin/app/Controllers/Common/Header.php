<?php

namespace Admin\Controllers\Common;

use Admin\Controllers\BaseController;
use Admin\Models\User\UserModel;

class Header extends BaseController
{
    public function index()
    {  

        $data['base']       = base_url();
        $data['site_url']   = base_url();
        $data['home']       = url_to('common.dashboard');
        $data['profile']    = base_url('common/profile', '?user_token=' . $this->session->get('user_token'));
        $data['logout']     = url_to('common/logout');
        $data['activity']   = base_url('report/report', '?user_token=' . $this->session->get('user_token'));
        $data['setting']    = base_url('setting/setting', '?user_token=' . $this->session->get('user_token'));
        $data['configName'] = $this->registry->get('config_name');

        $data['title']       = $this->document->getTitle();
        $data['description'] = $this->document->getDescription();
        $data['keywords']    = $this->document->getKeywords();
        $data['links']       = $this->document->getLinks();
        $data['styles']      = $this->document->getStyles();
        $data['scripts']     = $this->document->getScripts();

        $data['logged'] = $this->user->isLogged();

        $userModel = new UserModel();

        if ($this->user->isLogged() && $this->user->getID()) {
            $user_info = $userModel->find($this->user->getID());

            if ($user_info) {
                $data['firstname']     = $user_info['firstname'];
                $data['lastname']      = $user_info['lastname'];
                $data['username']      = $user_info['username'];
                $data['user_group_id'] = $user_info['user_group_id'];

                if (is_file(DIR_IMAGE . $user_info['image'])) {
                    $data['image'] = resizeImage($user_info['image'], 45, 45);
                } else {
                    $data['image'] = resizeImage('profile.png', 45, 45);
                }
            } else {
                $data['firstname']     = '';
                $data['lastname']      = '';
                $data['user_group_id'] = '';
                $data['image']         = '';
            }
        }
        
        $data['locale'] = $this->registry->get('locale') ? strtoupper($this->registry->get('locale')) :  strtoupper($this->request->getLocale());

        lang('common/header'); 

        return $this->template->render('common/header', $data);
    }
}
