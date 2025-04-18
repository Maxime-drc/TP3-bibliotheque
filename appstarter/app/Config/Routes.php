<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Login', 'Login::index');
$routes->post('Login', 'Login::attemptlogin');
$routes->get('home', 'home::index');
$routes->get('/bibliotheque', 'Bibliotheque::index');
