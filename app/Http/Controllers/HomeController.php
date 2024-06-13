<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dorms = [
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
        ];

        return view('pages.home.index', [
            'dorms' => $dorms
        ]);
    }
}
