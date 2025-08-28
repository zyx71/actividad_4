<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/explorar', function () {
    return view('explorar');
})->name('explorar');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');