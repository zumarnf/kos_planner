<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Zumar']);
});

Route::get('/blog', function () {
    return view('blog', ['nama' => 'Zumar']);
});

Route::get('/contact', function () {
    return view('contact');
});
