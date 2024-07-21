<?php

namespace Config;

use App\Controllers\Dashboard;

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

//rutas principales
$routes->get('/principal', 'Home::index');
$routes->get('/nosotros', 'Home::nosotros');
$routes->get('/acerca', 'Home::acerca');

// Ruta del logueo 
$routes->get('/login', 'LoginController::index');
$routes->post('/enviar-login', 'LoginController::ingresar');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dashboard_admin', 'Dashboard::panel');
$routes->get('/logout', 'LoginController::logout');

// Ruta del registro de usuario
$routes->get('/registrarse', 'UsuarioController::create');
$routes->post('/enviar-form', 'UsuarioController::formValidation');

// Rutas del CRUD de usuario
$routes->get('/lista_usuario', 'CrudController::index');
$routes->get('/alta_usuario', 'CrudController::create');
$routes->post('/submit-form', 'CrudController::store');
$routes->get('/modificar_usuario/(:num)', 'CrudController::singleUser/$1');
$routes->post('/update', 'CrudController::update');
$routes->get('/delete/(:num)', 'CrudController::delete/$1');
$routes->get('/usuarios_eliminados', 'CrudController::usuarios_eliminados');
$routes->get('/desactivar_usuario/(:num)', 'CrudController::quitar/$1');
$routes->get('/activar_usuario/(:num)', 'CrudController::colocar/$1');