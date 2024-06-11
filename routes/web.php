<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home/home', ['dorms' => [
        [
            'slug' => 'kos-1',
            'title' => 'Kos Angkasa Putih',
            'gambar' => 'img/kamar.jpg',
            'lokasi' => 'Surabaya'
        ],
        [
            'slug' => 'kos-2',
            'title' => 'Kos Angkasa Merah',
            'gambar' => 'img/kamar2.jpg',
            'lokasi' => 'Malang'
        ]
    ]]);
});

Route::get('detaildorm/detaildorms/{slug}', function ($slug) {
    return view('detaildorm/detaildorms', ['title' => 'Dorm',
    'rooms'=>[
        [
            'slug' => 'kamar-1',
            'title' => 'Kamar 1',
            'gambar' => 'img/kamar.jpg',
            'price' => '100000',
            'lokasi' => 'Surabaya'
        ],
        [
            'slug' => 'kamar-2',
            'title' => 'Kamar 2',
            'gambar' => 'img/kamar2.jpg',
            'price' => '200000',
            'lokasi' => 'Malang'
        ]
    ]
]);
});

Route::get('/dashboard', function () {
    return view('adminkos/dashboard');
});

Route::get('detailpage/detail/{slug}', function ($slug) {
    $rooms = [
        [
            'slug' => 'kamar-1',
            'title' => 'Kamar 1',
            'gambar' => 'img/kamar.jpg',
            'price' => '100000',
            'lokasi' => 'Surabaya',
            'fasilitas' => [],
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos et cupiditate soluta explicabo sapiente quaerat odio recusandae omnis nesciunt optio libero, quasi quia possimus, expedita quos iusto quibusdam quae nobis.'
        ],
        [
            'slug' => 'kamar-2',
            'title' => 'kamar 2',
            'gambar' => 'img/kamar2.jpg',
            'price' => '200000',
            'lokasi' => 'Malang',
            'fasilitas' => [],
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos et cupiditate soluta explicabo sapiente quaerat odio recusandae omnis nesciunt optio libero, quasi quia possimus, expedita quos iusto quibusdam quae nobis.'
        ]
    ];
    $detail = Arr::first($rooms, function ($detail) use ($slug) {
        return $detail['slug'] == $slug;
    });
    return view('detailpage/detail', ['title' => 'Single Post', 'detail' => $detail]);
});

Route::get('/bookingpage/booking/{slug}', function ($slug) {
    $rooms = [
        [
            'slug' => 'kamar-1',
            'title' => 'Kamar 1',
            'price' => '100000',
        ],
        [
            'slug' => 'kamar-2',
            'title' => 'Kamar 2',
            'price' => '200000',
        ]
    ];
    $detail = Arr::first($rooms, function ($detail) use ($slug) {
        return $detail['slug'] == $slug;
    });
    return view('bookingpage/booking', ['title' => 'Booking Page', 'rooms' => $detail]);
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


