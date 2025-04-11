<?php

namespace Admin\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class UserTokenFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

         // Ignore controllers for login Check
         $ignoredRoutes = [
            'common/login',
            'common/forgotten',
        ];

        // if (!$request->getVar('user_token') ||
        //  !service("session")->get('user_token') ||
        //   ($request->getVar('user_token') !=
        //   service("session")->get('user_token')
        // )) {
        //     return redirect()->route('/')->with('warning', lang('En.error.token'));
        // }

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Nothing Here
    }

    // ----------------------------------------------------
}
