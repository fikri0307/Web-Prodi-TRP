<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', fn() => view('pages.halaman_utama'));
Route::get('/berita', fn() => view('pages.kanal_berita'));
Route::get('/dosen', fn() => view('pages.daftar_dosen'));