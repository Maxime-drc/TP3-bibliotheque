<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Login', 'Login::index');            
$routes->post('Login', 'Login::attemptLogin');     
$routes->get('home', 'Home::index');
$routes->get('abonne', 'Abonne::index');
$routes->get('admin', 'Admin::index');

$routes->get('abonne/login', 'Abonne::login');
$routes->post('abonne/authentifier', 'Abonne::authentifier');
$routes->get('abonne/espace', 'Abonne::espace');
$routes->get('abonne/emprunts', 'Abonne::emprunts');
$routes->get('abonne/profil', 'Abonne::profil');
$routes->post('abonne/modifierProfil', 'Abonne::modifierProfil');
$routes->get('abonne/deconnexion', 'Abonne::deconnexion');
$routes->get('abonne/ajouterLivre', 'Abonne::ajouterLivre');
