<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboardp');

$routes->get('/LoginView', 'LoginController::form');
$routes->post('/LoginView', 'LoginController::login');
$routes->get('/logout', 'LoginController::logout');

$routes->get('/Dashboard/Siswa', 'SiswaController::tampil_dashboard');
$routes->get('/Dashboard/Pengajar', 'PengajarController::tampil_dashboard');

$routes->get('/Dashboard/absen.php', 'SiswaController::absensi');
$routes->get('/Dashboard/tampildata.php', 'MateriController::tampil');

$routes->get('/Dashboard/index.php', 'PengajarController::absensi');
$routes->get('/Dashboard/tampildata.php', 'MateriController::tampil');