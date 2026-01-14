<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('areas', 'AreaController::index');
$routes->get('areas/new', 'AreaController::new');
$routes->post('areas', 'AreaController::create');


