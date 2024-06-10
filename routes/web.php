<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home/home');
});

Route::get('/dashboard', function () {
    return view('adminkos/dashboard');
});

Route::get('/detail', function () {
    return view('detailpage/detail');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Zumar']);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
