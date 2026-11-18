<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Home::index');

$routes->get('/beranda', 'Home::index');

#$routes->get('/mahasiswa', 'Home::mahasiswa');

$routes->get('dosen', 'dosen::index');

$routes->get('matakuliah', 'MataKuliah::index');

$routes->get('/tentang', 'Home::tentang');

$routes->get('mahasiswa', 'Mahasiswa::index');

