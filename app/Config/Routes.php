<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', function () {
    echo 'TERIMA KASIH';
});

//Admin Area---------------------------------
//-------------------------------------------
$routes->get('/admin', 'Admin::index');
$routes->post('/admin/start-biliksuara', 'AdminProses::startBiliksuara');

//Proses Login Admin
$routes->post('/admin/proseslogin', 'AdminProses::proseslogin');
$routes->post('/admin/(:any)', 'AdminProses::proseslogin');

//Pages Admin
$routes->get('/admin/hasil-pemilihan', 'Admin::hasilPemilihan');
$routes->get('/admin/data-pemilih', 'Admin::dataPemilihan');
$routes->get('admin/data-formatur', 'Admin::dataFormatur');



//home admin harus paling bawah agar tdk menimpa----
$routes->get('/admin/(:any)', 'Admin::home/$1');


//User Area---------------------------------
$routes->post('/userproses/prosespemilihan', 'UserProses::ProsesPemilihan');
$routes->get('/(:any)', 'Home::index/$1');




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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
