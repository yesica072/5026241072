<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaikuliahController;
use App\Http\Controllers\KeranjangBelanjaDBController;

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

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('/nilaikuliah', [NilaikuliahController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/create', [NilaikuliahController::class, 'create'])->name('nilaikuliah.create');
Route::post('/nilaikuliah', [NilaikuliahController::class, 'store'])->name('nilaikuliah.store');
Route::get('/nilaikuliah/{nrp}/edit', [NilaikuliahController::class, 'edit'])->name('nilaikuliah.edit');
Route::put('/nilaikuliah/{nrp}', [NilaikuliahController::class, 'update'])->name('nilaikuliah.update');
Route::delete('/nilaikuliah/{nrp}', [NilaikuliahController::class, 'destroy'])->name('nilaikuliah.destroy');

Route::get('/keranjang-belanja', [KeranjangBelanjaDBController::class, 'index']);
Route::get('/keranjang-belanja/beli', [KeranjangBelanjaDBController::class, 'beli']);
Route::post('/keranjang-belanja/store', [KeranjangBelanjaDBController::class, 'store']);
Route::get('/keranjang-belanja/batal/{id}', [KeranjangBelanjaDBController::class, 'batal']);

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
