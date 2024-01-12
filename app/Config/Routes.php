<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboardp');

$routes->get('/LoginView', 'LoginController::form');
$routes->post('/LoginView', 'LoginController::login');
$routes->get('/keluar', 'LoginController::logout');
$routes->post('/keluar', 'LoginController::logout');

$routes->get('/Dashboard/Siswa', 'SiswaController::tampil_dashboard');
$routes->get('/Dashboard/Pengajar', 'PengajarController::tampil_dashboard');
$routes->post('/Dashboard/Pengajar', 'PengajarController::tampil_dashboard');

$routes->get('/Dashboard/Pengajar/Home', 'PengajarController::tampil_dashboard');
$routes->post('/Dashboard/Pengajar/Home', 'PengajarController::tampil_dashboard');
$routes->get('/Dashboard/Pengajar/Absen-Siswa', 'AbsensiController::absensipengajar');
$routes->post('/Dashboard/Pengajar/Absen-Siswa', 'AbsensiController::absensipengajar');
$routes->get('/Dashboard/Pengajar/Materi', 'MateriController::tampilpengajar');
$routes->post('/Dashboard/Pengajar/Materi', 'MateriController::tampilpengajar');
$routes->get('/Dashboard/Pengajar/Kelas', 'KelasController::tampilpengajar');
$routes->post('/Dashboard/Pengajar/Kelas', 'KelasController::tampilpengajar');
$routes->get('/Dashboard/Pengajar/Jadwal', 'JadwalController::tampilpengajar');
$routes->post('/Dashboard/Pengajar/Jadwal', 'JadwalController::tampilpengajar');
$routes->get('/Dashboard/Pengajar/Daftar-Siswa', 'DaftarsiswaController::tampilpengajar');
$routes->post('/Dashboard/Pengajar/Daftar-Siswa', 'DaftarsiswaController::tampilpengajar');
$routes->get('/Dashboard/Pengajar/Nilai-Siswa', 'NilaiController::tampilpengajar');
$routes->post('/Dashboard/Pengajar/Nilai-Siswa', 'NilaiController::tampilpengajar');

$routes->get('/Dashboard/Siswa/Home', 'SiswaController::tampil_dashboard');
$routes->post('/Dashboard/Siswa/Home', 'SiswaController::tampil_dashboard');
$routes->get('/Dashboard/Siswa/Absensi', 'AbsensiController::absensisiswa');
$routes->post('/Dashboard/Siswa/Absensi', 'AbsensiController::absensisiswa');
$routes->get('/Dashboard/Siswa/Nilai-Siswa', 'NilaiController::tampilsiswa');
$routes->post('/Dashboard/Siswa/Nilai-Siswa', 'NilaiController::tampilsiswa');
$routes->get('/Dashboard/Siswa/Materi-Siswa', 'MateriController::tampilsiswa');
$routes->post('/Dashboard/Siswa/Materi-Siswa', 'MateriController::tampilsiswa');
$routes->get('/Dashboard/Siswa/Kelas', 'KelasController::tampilsiswa');
$routes->post('/Dashboard/Siswa/Kelas', 'KelasController::tampilsiswa');
$routes->get('/Dashboard/Siswa/Jadwal', 'JadwalController::tampilsiswa');
$routes->post('/Dashboard/Siswa/Jadwal', 'JadwalController::tampilsiswa');