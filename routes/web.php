<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home/home', ['home' => [
        [
            'slug' => 'kos-1',
            'title' => 'Kos Angkasa Putih',
            'gambar' => 'img/kamar.jpg',
            'price' => '100000',
            'lokasi' => 'Surabaya'
        ],
        [
            'slug' => 'kos-2',
            'title' => 'Kos Angkasa Merah',
            'gambar' => 'img/kamar2.jpg',
            'price' => '100000',
            'lokasi' => 'Malang'
        ]
    ]]);
});

Route::get('/dashboard', function () {
    return view('adminkos/dashboard');
});

Route::get('detailpage/detail/{slug}', function ($slug) {
    $home = [
        [
            'slug' => 'kos-1',
            'title' => 'Kos Angkasa Putih',
            'gambar' => 'img/kamar.jpg',
            'price' => '100000',
            'lokasi' => 'Surabaya',
            'fasilitas' => [],
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos et cupiditate soluta explicabo sapiente quaerat odio recusandae omnis nesciunt optio libero, quasi quia possimus, expedita quos iusto quibusdam quae nobis.'
        ],
        [
            'slug' => 'kos-2',
            'title' => 'Kos Angkasa Merah',
            'gambar' => 'img/kamar2.jpg',
            'price' => '200000',
            'lokasi' => 'Malang',
            'fasilitas' => [],
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos et cupiditate soluta explicabo sapiente quaerat odio recusandae omnis nesciunt optio libero, quasi quia possimus, expedita quos iusto quibusdam quae nobis.'
        ]
    ];
    $detail = Arr::first($home, function ($detail) use ($slug) {
        return $detail['slug'] == $slug;
    });
    return view('detailpage/detail', ['title' => 'Single Post', 'detail' => $detail]);
});

Route::get('/bookingpage/booking/{slug}', function ($slug) {
    $home = [
        [
            'slug' => 'kos-1',
            'title' => 'Kos Angkasa Putih',
            'price' => '100000',
        ],
        [
            'slug' => 'kos-2',
            'title' => 'Kos Angkasa Merah',
            'price' => '200000',
        ]
    ];
    $detail = Arr::first($home, function ($detail) use ($slug) {
        return $detail['slug'] == $slug;
    });
    return view('bookingpage/booking', ['title' => 'Booking Page', 'detail' => $detail]);
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


