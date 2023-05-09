<?php

namespace Config;

$routes = Services::routes();

/*
 * Router Setup
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// $routes->setAutoRoute(false);

/*
 * Route Definitions
 */

$routes->get('/', 'Libros::index');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
$routes->get('listar', 'Libros::index');
$routes->get('crear', 'Libros::crear');
$routes->post('guardar', 'Libros::guardar');
$routes->get('borrar/(:num)', 'Libros::borrar/$1');
$routes->get('editar/(:num)', 'Libros::editar/$1');
$routes->post('actualizar', 'Libros::actualizar');

//$routes->get('/', 'Venders::index');
$routes->get('vender', 'Venders::index');
$routes->get('todas', 'Ventas::index');
/*$routes->get('vender/quitar/(:num)', 'App\Controllers\Vender::quitarDelCarrito/$1');
$routes->get('vender/cancelar', 'App\Controllers\Vender::cancelarVenta');
$routes->post('vender/terminar', 'App\Controllers\Vender::terminarVenta');
$routes->post('vender/agregar', 'App\Controllers\Vender::agregar');*/

/*
$routes->get('listar', 'Libros::index');
$routes->get('crear', 'Libros::crear');
$routes->post('guardar', 'Libros::guardar');
$routes->get('borrar/(:num)', 'Libros::borrar/$1');
$routes->get('editar/(:num)', 'Libros::editar/$1');
$routes->post('actualizar', 'Libros::actualizar');*/