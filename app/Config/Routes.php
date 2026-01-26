<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'DashboardController::index');

/**
*   $routes->get('/', 'Home::index');
*/

$routes->get('areas', 'AreaController::index');
$routes->get('areas/new', 'AreaController::new');
$routes->post('areas', 'AreaController::create');

$routes->get('categorias', 'CategoriaEquipoController::index');
$routes->get('categorias/new', 'CategoriaEquipoController::new');
$routes->post('categorias', 'CategoriaEquipoController::create');

$routes->get('equipos', 'EquipoController::index');
$routes->get('equipos/new', 'EquipoController::new');
$routes->post('equipos', 'EquipoController::create');





