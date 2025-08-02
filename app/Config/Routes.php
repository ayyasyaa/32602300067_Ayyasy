<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/halodunia', 'Page::halodunia');
$routes->match(['get','post'],'form','FormController::form');
$routes->post('process-form','FormController::processForm');
$routes->get('form', 'FormController::form');
$routes->post('submit', 'FormController::submit');
$routes->get('hello', 'Hello::index');
$routes->get('profil', 'Page::profil');
$routes->get('pengalaman', 'Page::pengalaman');
$routes->get('/layouting', 'LayoutingController');
$routes->get('/crud', 'Crud::index');
$routes->get('/crud/tambah', 'Crud::tambah');
$routes->get('/crud/hapus', 'Crud::hapus');
$routes->get('/crud/edit/(:segment)', 'Crud::edit/$1');  // GET: Menampilkan form edit
$routes->post('/crud/editan', 'Crud::editan');  // POST: Mengirim data untuk diupdate
$routes->get('/page-one', 'PageController::pageOne');
$routes->get('/page-two', 'PageController::pageTwo');
