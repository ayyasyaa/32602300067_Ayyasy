<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('pretest', 'Praktikum::pretest');
$routes->get('profil', 'Praktikum::profil');
$routes->get('/form', 'Mahasiswa::form');
$routes->post('/simpan', 'Mahasiswa::simpan');
$routes->get('/lihat', 'Mahasiswa::lihat');
$routes->get('/tambah', 'Mahasiswa::tambah');




