<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboardp');
$routes->get('/Dashboard/Pengajar', 'Home::dashboardsiswa');

$routes->get('/Siswa', 'AbsensiController::tampil');
$routes->post('/Siswa', 'AbsensiController::tampil');

$routes->get('/Pengajar', 'AbsensiController::tampil');
$routes->post('/Pengajar', 'AbsensiController::tampil');
$routes->get('/Pengajar', 'MateriController::show');
$routes->post('/Pengajar', 'MateriController::show');
$routes->get('/Pengajar', 'SiswaController::show');
$routes->post('/Pengajar', 'SiswaController::show');

$routes->get('/LoginView', 'LoginController::login');
$routes->post('/LoginView', 'LoginController::login');