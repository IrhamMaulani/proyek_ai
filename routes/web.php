<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('admin.beranda');
});

Route::get('/absensi', function () {
    return view('admin.absensi');
});

Route::get('/mahasiswa', function () {
    return view('admin.daftar_mahasiswa');
});

Route::get('/registrasi', function () {
    return view('admin.registrasi_mahasiswa');
});
