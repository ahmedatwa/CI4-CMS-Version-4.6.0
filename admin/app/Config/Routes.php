<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Common\Login::index');


// Common
$routes->group('common', static function ($routes) {
    $routes->get('dashboard', 'Common\Dashboard::index', ['as' => 'common.dashboard']);
    $routes->get('filemanager', 'Common\Filemanager::index', ['as' => 'common.filemanager']);
    $routes->post('login/authlogin', 'Common\Login::authLogin', ['as' => 'login.auth']);
    $routes->get('logout', 'Common\Logout::index', ['as' => 'logout']);
    $routes->post('forgotten/resetPassword', 'Common\Forgotten::resetPassword');
    $routes->get('forgotten', 'Common\Forgotten::index');
    
});

// Catalog
$routes->group('catalog', static function ($routes) {
    $routes->get('category', 'Catalog\Category::index');
    $routes->get('category/form', 'Catalog\Category::form');
    $routes->post('category/add', 'Catalog\Category::add');
    $routes->post('category/edit', 'Catalog\Category::edit');
    $routes->post('category/delete', 'Catalog\Category::delete');
    $routes->get('information', 'Catalog\Information::index');
    $routes->get('information/form', 'Catalog\Information::form', ['as' => 'information.form']);
    $routes->post('information/add', 'Catalog\Information::add', ['as' => 'information.add']);
    $routes->post('information/edit', 'Catalog\Information::edit', ['as' => 'information..edit'] );
    $routes->post('information/delete', 'Catalog\Information::delete', ['as' => 'information.delete']);
});

// Customer
$routes->group('customer', static function ($routes) {
    $routes->get('customer', 'Customer\Customer::index');
    $routes->get('customer/form', 'Customer\Customer::form');
    $routes->post('customer/add', 'Customer\Customer::add');
    $routes->post('customer/edit', 'Customer\Customer::edit');
    $routes->post('customer/delete', 'Customer\Customer::delete');
    $routes->get('customer_group', 'Customer\Customer_group::index');
    $routes->get('customer_group/form', 'Customer\Customer_group::form');
    $routes->post('customer_group/add', 'Customer\Customer_group::add');
    $routes->post('customer_group/edit', 'Customer\Customer_group::edit');
    $routes->post('customer_group/delete', 'Customer\Customer_group::delete');

});

// Tool
$routes->group('tool', static function ($routes) {
    $routes->get('mail', 'Tool\Mail::index');
    $routes->get('log', 'Tool\Log::index');
    $routes->post('log/clear', 'Tool\Log::clear');
});

// Tool
$routes->group('localisation', static function ($routes) {
    $routes->get('language', 'Localisation\Language::index');
    $routes->get('language/form', 'Localisation\Language::form');
    $routes->post('language/add', 'Localisation\Language::add');
    $routes->post('language/edit', 'Localisation\Language::edit');
    $routes->get('log', 'Tool\Log::index');
    $routes->post('log/clear', 'Tool\Log::clear');
});

//setting
$routes->group('setting', static function ($routes) {
    $routes->get('extension', 'Setting\Extension::index');
    $routes->get('module', 'Setting\Module::index');
    $routes->get('setting', 'Setting\Setting::index');
    $routes->post('setting/edit', 'Setting\Setting::edit', ['as' => 'setting.edit']);
    $routes->get('event', 'Setting\Event::index');
});

//design
$routes->group('design', static function ($routes) {
    $routes->get('layout', 'Design\Layout::index');
    $routes->get('layout/form', 'Design\Layout::form');
    $routes->post('layout/edit', 'Design\Layout::edit');
    $routes->get('banner', 'Design\Banner::index');
    $routes->get('banner/form', 'Design\Banner::form');
    $routes->post('banner/edit', 'Design\Banner::edit');
    $routes->get('translation', 'Design\Translation::index');
});

//report
$routes->group('report', static function ($routes) {
    $routes->get('report', 'Report\Report::index');
    $routes->get('banner', 'Design\Banner::index');
    $routes->get('online', 'Report\Online::index');
});

//user
$routes->group('user', static function ($routes) {
    $routes->get('user', 'User\User::index');
    $routes->get('user/form', 'User\User::form');
    $routes->get('user_group', 'User\User_group::index');
    $routes->get('user_group/form', 'User\User_group::form');
    $routes->get('profile', 'Common\Profile::index', ['as' => 'user.profile']);
    $routes->post('user/edit', 'User\User::edit');
    $routes->post('user/add', 'User\User::add');
    $routes->post('user/delete', 'User\User::delete');
    $routes->post('User_group/edit', 'User\User_group::edit');
    $routes->post('User_group/add', 'User\User_group::add');
    $routes->post('User_group/delete', 'User\User_group::delete');
});

// Extension
$routes->group('extension', static function ($routes) {
    $routes->get('analytics', 'Extension\Analytics::index');
    $routes->get('dashboard', 'Extension\Dashboard::index');
    $routes->get('report', 'Extension\Report::index');
    $routes->get('blog', 'Extension\Blog::index');
    //theme
    $routes->get('theme', 'Extension\Theme::index');
    $routes->get('theme/install', 'Extension\Theme::install');
    $routes->get('theme/uninstall', 'Extension\Theme::uninstall');
});

// Modules
$routes->group('module', static function ($routes) {
    $routes->get('account', 'module\Account::index');
    $routes->get('carousel', 'module\Carousel::index');
    $routes->get('html', 'module\Html::index');
    $routes->get('menu', 'module\Menu::index');
    $routes->get('video', 'module\Video::index');
});

// Design
$routes->group('design', static function ($routes) {
    $routes->get('layout', 'Design\Layout::form');
    $routes->get('banner', 'Design\banner::index');
    // Translation
    $routes->get('translation', 'Design\Translation::index');
    $routes->get('translation/form', 'Design\Translation::form');
    $routes->get('translation/path', 'Design\Translation::path');
    $routes->get('translation/translation', 'Design\Translation::translation');
    $routes->post('translation/add', 'Design\Translation::add');
    $routes->post('translation/edit', 'Design\Translation::edit');
    $routes->post('translation/delete', 'Design\Translation::delete');
});

// Customer
$routes->group('customer', static function ($routes) {
    $routes->get('customer/autocomplete', 'Customer\Customer::autocomplete');
});

// Extenstions Collection
$routes->group('extensions', ['namespace' => 'Extensions\Controllers'], static function ($routes) {
    // Analytics
    $routes->get('analytics/google', 'Analytics\Google::index');
    $routes->post('analytics/google/edit', 'Analytics\Google::edit');
    // dashboard
    $routes->get('dashboard/customer_activity', 'Dashboard\Customer_activity::index');
    $routes->post('dashboard/customer_activity/edit', 'Dashboard\Customer_activity::edit');
    $routes->post('dashboard/customer_online/edit', 'Dashboard\Customer_online::edit');
    $routes->get('dashboard/customer_online', 'Dashboard\Customer_online::index');
    // Reports
    $routes->get('report/user_activity', 'Report\User_activity::index');
    $routes->post('report/user_activity/edit', 'Report\User_activity::edit');
    $routes->post('report/user_activity/delete', 'Report\User_activity::delete');
    $routes->get('report/user_activity/report', 'Report\User_activity::report');
    // Themes
    $routes->get('theme/basic', 'Theme\Basic::index');
    $routes->post('theme/basic/edit', 'Theme\Basic::edit');
    // Blog
    $routes->get('blog/category', 'Blog\Category::index');
    $routes->get('blog/category/form', 'Blog\Category::form');
    $routes->post('blog/category/add', 'Blog\Category::add');
    $routes->post('blog/category/edit', 'Blog\Category::edit');
    $routes->post('blog/category/delete', 'Blog\Category::delete');

    $routes->get('blog/post', 'Blog\Post::index');
    $routes->get('blog/post/form', 'Blog\post::form');
    $routes->post('blog/post/add', 'Blog\post::add');
    $routes->post('blog/post/edit', 'Blog\post::edit');
    $routes->post('blog/post/delete', 'Blog\post::delete');

    $routes->get('blog/comment', 'Blog\Comment::index');
    $routes->get('blog/comment/form', 'Blog\comment::form');
    $routes->post('blog/comment/add', 'Blog\comment::add');
    $routes->post('blog/comment/edit', 'Blog\comment::edit');
    $routes->post('blog/comment/delete', 'Blog\comment::delete');
});

