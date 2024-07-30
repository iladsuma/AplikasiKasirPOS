<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login.login');
})->name('login');

Route::post('/login', 'Auth\LoginController@login');