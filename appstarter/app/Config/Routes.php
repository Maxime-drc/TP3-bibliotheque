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



$routes->group('admin', ['filter' => 'isAdmin'], function($routes) {
    $routes->get('dashboard', 'Admin::dashboard');
    $routes->match(['get', 'post'], 'ajouter-livre', 'Admin::ajouterLivre');
    $routes->get('liste-livres', 'Admin::listeLivres');
    $routes->match(['get', 'post'], 'ajouter-exemplaire', 'Admin::ajouterExemplaire');
    $routes->get('liste-exemplaires', 'Admin::listeExemplaires');
    $routes->match(['get', 'post'], 'ajouter-abonne', 'Admin::ajouterAbonne');
    $routes->get('liste-abonnes', 'Admin::listeAbonnes');
    $routes->match(['get', 'post'], 'modifier-abonne/(:num)', 'Admin::modifierAbonne/$1');
});

$routes->get('/livre', 'Livre::index');
$routes->get('/livre/create', 'Livre::create');
$routes->post('/livre/store', 'Livre::store');

$routes->get('/exemplaire', 'Exemplaire::index');
$routes->get('/exemplaire/create', 'Exemplaire::create');
$routes->post('/exemplaire/store', 'Exemplaire::store');

$routes->get('/abonne', 'Abonne::index');
$routes->get('/abonne/create', 'Abonne::create');
$routes->post('/abonne/store', 'Abonne::store');

$routes->get('/gerer_livre', 'Admin::gererLivre');
$routes->get('/gerer_exemplaire', 'Admin::gererExemplaire');
$routes->get('/gerer_abonne', 'Admin::gererAbonne');
