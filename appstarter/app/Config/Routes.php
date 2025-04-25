<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Login', 'Login::index');            
$routes->post('Login', 'Login::attemptLogin');     
$routes->get('home', 'Home::index');
$routes->get('bibliotheque', 'Bibliotheque::index');
$routes->get('admin', 'Admin::index');

