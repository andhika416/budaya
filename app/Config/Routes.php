<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/halaman_utama', 'Halamanutama::index');
$routes->get('/landing_home', 'Home::landingHome');
$routes->get('/home', 'Home::index');
$routes->get('/lembaga', 'Lembaga::index');
$routes->get('/berita', 'Kabar::index');
$routes->get('/kabar', 'Kabar::index');

$routes->get('/profil', 'Profil::index');
$routes->get('/edit', 'Profil::index');
$routes->get('/wargaku', 'Wargaku::index');

$routes->get('/tamu', 'Tamu::index');
$routes->get('/struktur', 'Struktur::index');
$routes->get('/kartar', 'Karangtaruna::index');
$routes->get('/agenda', 'Agenda::index');
$routes->get('/keuangan', 'Keuangan::index');
$routes->get('/surat', 'Surat::index');
$routes->get('/lahir', 'Lahir::index');
$routes->get('/login', 'Login::index');
$routes->get('/logout', 'Login::logout');
$routes->get('logout_admin', 'Loginadmin::logout');

$routes->get('/', 'Login::index');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');

$routes->get('login', 'Login::index');
$routes->post('login/submit', 'Login::submit');

$routes->get('login_admin', 'Loginadmin::index');
$routes->post('login_admin/submit', 'Loginadmin::submit');
$routes->get('daftar_admin', 'Loginadmin::daftar');
$routes->post('daftar_admin/submit', 'Loginadmin::register');


$routes->get('home', 'Home::index');
$routes->get('agenda', 'Agenda::index');

$routes->get('/', 'Home::index');
$routes->get('/surat',       'Surat::index');        // tampilkan form
$routes->post('/surat/proses', 'Surat::proses');      // proses dan generate PDF
$routes->post('/cetak_surat', 'Surat::proses');       // alias, jika mau
$routes->get('/surat/cetak/(:num)', 'Surat::cetak/$1');


$routes->group('', ['filter' => 'adminauth'], function($routes) {
    $routes->get('/admin', 'Admin::index');
    $routes->get('/admin_data', 'Admindata::index');
    $routes->get('/tambah_warga', 'Tambahwarga::index');
    $routes->get('/edit_warga/(:num)', 'Editwarga::index/$1');
    $routes->post('/edit_warga/update/(:num)', 'Editwarga::update/$1');
    $routes->get('/hapus_warga/(:num)', 'Hapuswarga::index/$1');
    $routes->get('/admin_iuran', 'Adminiuran::index');
    $routes->get('/tambah_iuran', 'Tambahiuran::index');
    $routes->get('/edit_iuran/(:num)', 'Editiuran::index/$1');
    $routes->post('/edit_iuran/(:num)', 'Editiuran::update/$1');
    $routes->post('/hapus_iuran/(:num)', 'Hapusiuran::index/$1');
    $routes->post('/simpan_pemasukan', 'Tambahiuran::simpan');
    
    $routes->get('/warga', 'Warga::index');
    $routes->post('/warga/store', 'Warga::store');
    $routes->post('/warga/simpan', 'Warga::simpan');
    $routes->get('/warga/edit/(:num)', 'Warga::edit/$1');
    $routes->post('/warga/update/(:num)', 'Warga::update/$1');
    $routes->get('/warga/delete/(:num)', 'Warga::delete/$1');

    $routes->get('/profil_admin', 'Profiladmin::index');
    $routes->get('/admin_laporan', 'Adminlaporan::index');
    $routes->get('/adminlaporan/hapus/(:num)', 'Adminlaporan::hapus/$1');
    $routes->get('/admin_surat', 'Adminsurat::index');
    $routes->get('/admin_surat/delete/(:num)', 'AdminSurat::delete/$1');
    $routes->get('/admin_surat/setujui/(:num)', 'AdminSurat::setujui/$1');
    $routes->get('/admin_surat/tolak/(:num)', 'AdminSurat::tolak/$1');
    $routes->get('/admin_surat/cetak/(:num)', 'AdminSurat::cetak/$1');
    $routes->get('/admin_akunwarga', 'Adminakunwarga::index');
    $routes->post('/admin_akunwarga/delete/(:num)', 'Adminakunwarga::delete/$1');
});



$routes->get('/edit_profil', 'Editprofil::index');
$routes->get('/daftar', 'Daftar::index');
$routes->post('register/process', 'Register::process');

//tamu
$routes->get('/tamu', 'Tamu::index');
$routes->post('/tamu/kirim', 'Tamu::kirim');
