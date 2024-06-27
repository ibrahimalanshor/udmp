<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard')->name('dashboard');
Route::view('/pengguna', 'dashboard')->name('pengguna');
Route::view('/material', 'dashboard')->name('material.index');
Route::view('/material/masuk', 'dashboard')->name('material.masuk');
Route::view('/material/keluar', 'dashboard')->name('material.keluar');
Route::view('/stok', 'dashboard')->name('stok');
Route::view('/profile', 'dashboard')->name('profile');
