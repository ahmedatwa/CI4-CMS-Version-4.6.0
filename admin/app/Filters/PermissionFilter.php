<?php

namespace Admin\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Config\Services;

class PermissionFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        
        $currentURI =  current_url();
        if ($currentURI === slash_item(env('app.baseURL') . 'index.php/')) {
            return;
        }

        $router = service('router');
        $user   = service('user');
        $session = service('session');
        $uri = $request->getUri();
        $controller = '';

       if($uri->getPath() === '/index.php/common/logout') {
        return;
       }

        if (substr($router->controllerName(), 0, strlen(APP_NAMESPACE) + 1) == '\\' . APP_NAMESPACE) {
            $controller = str_replace('\\', '/', substr($router->controllerName(), strlen('\\/' . APP_NAMESPACE . '\\Controllers')));
        } else {
            $controller = ltrim(str_replace('\\', '/', str_replace('Controllers\\', '', $router->controllerName())), '/\\');
        }

        
        $route = implode('/', $uri->getSegments());
        
        if ($route) {
            $route = strtolower($route);
            $query  = $uri->getQuery();
        $implode = '';
        if($query) {
            $explode = explode("&", $query);
            $implode = '';
            if(sizeof($explode) > 1) {
                unset($explode[0]);
                $implode = '&' . implode("&", $explode);
            }
        }


            // Ignore controllers for login Check
            $ignoredRoutes = [
                'common/login',
                'common/forgotten',
                '/index.php/common/login/authlogin'
            ];
                
              //  d($uri->getPath());
            if (!$user->isLogged() && !$session->get('user_token') && !in_array($uri->getPath(), $ignoredRoutes) ) {
                 echo view_cell('\Admin\Controllers\Common\Login::index', ['warning' => lang('en.error.token')]);
                exit(403);
            }

            /** -------------------------------
             * redirect when not logged in 
             * or user token isn't in session/mismatch
             */
            // Ignore controllers for token Check
            $ignoreRoutes = [
                'common/dashboard',
                'common/login',
                'common/logout',
                'common/forgotten',
                'error/not_found',
                'error/permission',
                'common/login/authlogin'
            ];
             
            //d( $session->get('user_token'));
            //d($request->getVar('user_token'));
            // redirect if not logged in or token expired
            if (!in_array($route, $ignoreRoutes) &&
            (!$request->getVar('user_token')) &&
            !$session->get('user_token') ||
            ($request->getVar('user_token') !=
             $session->get('user_token'))) 
             {
               
            echo view_cell('\Admin\Controllers\Common\Login::index', ['warning' => lang('En.error.token')]);
                exit(403); // Forbidden
            }

            /** -------------------------------
             * user permission check
             * show permission cell if access isn't permitted for controller 
             */ 
             
            // Ignore controllers for access Check
            $ignoreAccess = [
                'common/dashboard',
                'common/login',
                'common/logout',
                'common/forgotten',
                'error/not_found',
                'error/permission',
            ];
           
            if (!in_array(strtolower($controller), $ignoreAccess) && !$user->hasPermission('access', strtolower($controller))) {
                echo view_cell('\Admin\Controllers\Error\Permission::index');
                exit(401); //Forbidden
            }
        } else {
            throw new \Exception('Error: Route is not found' . $route);
            exit(404); // Forbidden
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Nothing Here
    }

    // ----------------------------------------------------
}
