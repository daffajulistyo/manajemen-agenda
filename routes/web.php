<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.home');
})->name('dashboard.index');

Route::get('/peserta', function () {
    return view('peserta.index');
})->name('peserta.index');
