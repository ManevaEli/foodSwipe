<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Food::index');
$routes->get('/register', 'Food::register');
$routes->get('/home', 'Food::home');
$routes->get('/stats', 'Food::stats');
$routes->get('/add-food', 'Food::add');


