<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Landing::index');
$routes->post('/api/tap', 'Api::tap');

// Admin
$routes->get('/admin', 'Admin::login');
$routes->post('/admin/auth', 'Admin::auth');
$routes->get('/admin/dashboard', 'Admin::dashboard');
$routes->get('/admin/users', 'Admin::users');
$routes->get('/admin/transaksi', 'Admin::transaksi');

