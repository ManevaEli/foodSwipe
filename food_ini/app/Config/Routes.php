<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->get('/login', 'Auth::login');
$routes->post('/loginPost', 'Auth::loginPost');
$routes->get('/logout', 'Auth::logout');

$routes->get('/register', 'Food::register');
$routes->get('/home', 'Food::home');
$routes->get('/stats', 'Food::stats');
$routes->get('/add-food', 'Food::add');


