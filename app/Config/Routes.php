<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/mata_kuliah', 'MataKuliah::index');
$routes->get('/mata_kuliah/create', 'MataKuliah::create');
$routes->post('/mata_kuliah/store', 'MataKuliah::store');
$routes->get('/mata_kuliah/edit/(:segment)', 'MataKuliah::edit/$1');
$routes->post('/mata_kuliah/update/(:segment)', 'MataKuliah::update/$1');
$routes->get('/mata_kuliah/delete/(:segment)', 'MataKuliah::delete/$1');

