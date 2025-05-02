<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('/Login', 'Login::index');
$routes->post('/Login', 'Login::attemptLogin');
$routes->get('/logout', 'Login::logout');

$routes->get('/admin', 'Admin::index');
$routes->get('/bibliotheque', 'Bibliotheque::index');
