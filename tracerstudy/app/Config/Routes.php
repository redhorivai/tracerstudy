<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');
$routes->get('login', '\App\Controllers\Login::index');
$routes->post('login/checklogin', '\App\Controllers\Login::checklogin');
$routes->post('login/logout', '\App\Controllers\Login::logout');

// Admin
$routes->get('admin/mahasiswa', '\App\Controllers\Admin\Mahasiswa::index');
$routes->get('admin', '\App\Controllers\Admin\Home::index');
$routes->get('admin/kuisoner/laporankuisoner', '\App\Controllers\Admin\Kuisoner::laporankuisoner');
$routes->get('admin/kuisoner/startkuisoner', '\App\Controllers\Admin\Kuisoner::startkuisoner');

// Alumni
$routes->get('alumni/kuisoner', '\App\Controllers\Alumni\Kuisoner::index');
$routes->get('alumni/kuisoner/startkuisoner', '\App\Controllers\Alumni\Kuisoner::startkuisoner');
$routes->get('alumni/kuisoner/autoinput', '\App\Controllers\Alumni\Kuisoner::autoinput');
$routes->get('alumni/alumni/laporankuisoner', '\App\Controllers\Alumni\Kuisoner::laporankuisoner');
$routes->get('alumni/profile', '\App\Controllers\Alumni\Profile::index');

// $routes->get('soal/tambahsoal', '\App\Controllers\Daftar::tambahsoal');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
