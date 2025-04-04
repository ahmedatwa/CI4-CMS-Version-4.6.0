<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Common\Home::index');

// Information
$routes->get('{locale}/contact-us', 'Information\Contact::index', ['as' => 'contact_us']);
$routes->get('{locale}/contact-send', 'Information\Contact::send', ['as' => 'contact_send']);
$routes->get('{locale}/((?=sp-)[a-zA-z- 0-9]+$)', 'Information\Information::index/$1');
//
// Category
$routes->get('{locale}/category/(:alphanum)', 'Product\Category::index/$1/$2', ['as' => 'product.category']);

// Account
$routes->group('{locale}/account', static function($routes)
{
	$routes->get('login', 'Account\Login::index', ['as' => 'account.login']);
	$routes->post('authenticate', 'Account\Login::authenticate', ['as' => 'account.authenticate']);
    $routes->get('register', 'Account\Register::index', ['as' => 'account.register']);
	$routes->post('create', 'Account\Register::create', ['as' => 'account.create']);
	
	$routes->get('dashboard', 'Account\Dashboard::index/$1', ['as' => 'account.dashboard']);
	$routes->get('success', 'Account\Success::index/$1', ['as' => 'account.success']);
	$routes->get('logout', 'Account\Logout::index', ['as' => 'account.logout']);
	$routes->get('profile', 'Account\Profile::index', ['as' => 'account.profile']);
	$routes->get('verify', 'Account\Profile::index', ['as' => 'account.verify']);
	$routes->get('forgotten', 'Account\Forgotten::index', ['as' => 'account.forgotten']);

 });

