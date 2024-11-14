<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'LoginController::index');
$routes->post('/auth/login', 'LoginController::login');
$routes->get('/home', 'Home::index');