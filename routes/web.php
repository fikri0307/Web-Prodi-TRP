<?php

use App\Models\Halaman_utama;
use App\Http\Controllers\Halaman_utamaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Models\Berita;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', fn() => view('pages.halaman_utama'));
Route::get('/', [Halaman_utamaController::class, 'index']); 
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/dosen', fn() => view('pages.daftar_dosen'));
Route::get('/berita/{id}', [Halaman_utamaController::class, 'detail'])
    ->name('berita.detail');
Route::get('/berita/{id}', [BeritaController::class, 'detail'])
    ->name('berita.detail');