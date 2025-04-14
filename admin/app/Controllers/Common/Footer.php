<?php

namespace Admin\Controllers\Common;

use Admin\Controllers\BaseController;
use CodeIgniter\CodeIgniter;

class Footer extends BaseController
{
    public function index()
    {
        $data['footer']  = sprintf(lang('common/footer.text_footer'), $this->registry->get('config_name'));
        $data['version'] = sprintf(lang('common/footer.text_version'), APP_VERSION, CodeIgniter::CI_VERSION);

        lang('common/footer');


        return $this->template->render('common/footer', $data);
    }
}
