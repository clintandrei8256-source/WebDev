<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('Auth.LogIn');
})->name('login');

Route::get('/register', function () {
    return view('Auth.Register');
})->name('register');