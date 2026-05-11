<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;

Route::get('/', function () {
    return view('menu');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat Datang </h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
    return view ('blog');
});

Route::get('pert5', function () {
    return view ('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);

//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('pert1', function () {
    return view('pertemuan1');
});

Route::get('news', function () {
    return view('news');
});

Route::get('pert3', function () {
    return view('template');
});

Route::get('responsive', function () {
    return view('responsive');
});

Route::get('contoh', function () {
    return view('contoh');
});

Route::get('5026241072', function () {
    return view('5026241072');
});

Route::get('tugaspertemuan5', function () {
    return view('tugaspertemuan5');
});
