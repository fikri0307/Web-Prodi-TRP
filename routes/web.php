<?php

use App\Models\Halaman_utama;
use App\Http\Controllers\Halaman_utamaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Models\Berita;
use App\Http\Controllers\DosenController;

use App\Http\Controllers\DataplpController;
use App\Models\Dataplp;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', fn() => view('pages.halaman_utama'));
Route::get('/', [Halaman_utamaController::class, 'index']); 
Route::get('/berita', [BeritaController::class, 'index']);

use App\Http\Controllers\FasilitasController;

Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/fasilitas/detail/{id}', [FasilitasController::class, 'show'])->name('fasilitas.detail');

Route::get('/dosen', [DosenController::class, 'dosen'])
    ->name('dosen');
    
Route::get('/dosen/{id}', [DosenController::class, 'detailDosen'])
    ->name('dosen.detail');

Route::get('/dataplp', [DataplpController::class, 'dataplp'])
    ->name('dataplp');
    
Route::get('/berita/{id}', [Halaman_utamaController::class, 'detail'])
    ->name('berita.detail');
Route::get('/berita/{id}', [BeritaController::class, 'detail'])
    ->name('berita.detail');

use App\Http\Controllers\GaleriController;

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');