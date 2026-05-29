<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');

$routes->get('/bahan-baku', 'BahanBaku::index', ['filter' => 'auth']);
$routes->get('/bahan-baku/create', 'BahanBaku::create', ['filter' => 'auth']);
$routes->post('/bahan-baku/store', 'BahanBaku::store', ['filter' => 'auth']);
$routes->get('/bahan-baku/delete/(:num)', 'BahanBaku::delete/$1', ['filter' => 'auth']);

$routes->get('/produksi', 'Produksi::index', ['filter' => 'auth']);
$routes->get('/produksi/create', 'Produksi::create', ['filter' => 'auth']);
$routes->post('/produksi/store', 'Produksi::store', ['filter' => 'auth']);
$routes->get('/produksi/delete/(:num)', 'Produksi::delete/$1', ['filter' => 'auth']);

$routes->get('/distribusi', 'Distribusi::index', ['filter' => 'auth']);
$routes->get('/distribusi/create', 'Distribusi::create', ['filter' => 'auth']);
$routes->post('/distribusi/store', 'Distribusi::store', ['filter' => 'auth']);
$routes->get('/distribusi/delete/(:num)', 'Distribusi::delete/$1', ['filter' => 'auth']);

$routes->get('/tracking/(:num)', 'Tracking::index/$1');