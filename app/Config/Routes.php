<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Login::index');
$routes->get('/', 'Beranda::index');

$routes->get('/register', 'Register::index');

$routes->get('/produk', 'Produk::index');
$routes->get('/produk/create', 'Produk::tambah');
$routes->post('/produk/save', 'Produk::simpan');
$routes->get('/produk/edit/(:num)', 'Produk::edit/$1');
$routes->post('/produk/update/(:num)', 'Produk::update/$1');
$routes->delete('/produk/(:num)', 'Produk::delete/$1');


$routes->get('/pelanggan', 'Pelanggan::index');
$routes->get('/pelanggan/create', 'Pelanggan::tambah');
$routes->post('/pelanggan/save', 'Pelanggan::simpan');
$routes->get('/pelanggan/edit/(:num)', 'Pelanggan::edit/$1');
$routes->post('/pelanggan/update/(:num)', 'Pelanggan::update/$1');
$routes->delete('/pelanggan/(:num)', 'Pelanggan::delete/$1');

$routes->get('/pengguna', 'Pengguna::index');
$routes->get('/pengguna/create', 'Pengguna::tambah');
$routes->post('/pengguna/save', 'Pengguna::simpan');
$routes->get('/pengguna/edit/(:segment)', 'Pengguna::edit/$1');
$routes->post('/pengguna/update/(:segment)', 'Pengguna::update/$1');
$routes->delete('/pengguna/(:segment)', 'Pengguna::delete/$1');

$routes->get('/penjualan', 'Penjualan::index');







//$routes->get('/beranda', 'Beranda::index');
