<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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
    $dorms = [
        [
            'slug' => 'kos-1',
            'gambarkos'=>'img/kamar4.jpg',
            'owner' =>'Bechkam',
            'title' => 'Kos Angkasa Putih',
        ],
        [
            'slug' => 'kos-2',
            'gambarkos'=>'img/kamar3.jpg',
            'owner' =>'Messi',
            'title' => 'Kos Angkasa Merah',
        ]
    ];
    $detail = Arr::first($dorms, function ($detail) use ($slug) {
        return $detail['slug'] == $slug;
    });
    return view('detaildorm/detaildorms', [
        'title' => 'Dorm',
        'detail' => $detail,
        'rooms' => [
            [
                'slug' => 'kamar-1',
                'gambarkos' => 'img/kamar4.jpg',
                'owner' => 'Bechkam',
                'title' => 'Kamar 1',
                'gambar' => 'img/kamar.jpg',
                'price' => '100000',
                'lokasi' => 'Surabaya'
            ],
            [
                'slug' => 'kamar-2',
                'gambarkos' => 'img/kamar3.jpg',
                'owner' => 'Messi',
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

Route::post('/bookingpage/booking/{slug}', function (Request $request, $slug) {
    $rooms = [
        [
            'slug' => 'kamar-1',
            'title' => 'Kamar 1',
            'price' => '100000',
            'dorm_slug' => 'kos-1',
        ],
        [
            'slug' => 'kamar-2',
            'title' => 'Kamar 2',
            'price' => '200000',
            'dorm_slug' => 'kos-2',
        ]
    ];

    $dorms = [
        [
            'slug' => 'kos-1',
            'kos' => 'Kos Angkasa Putih',
        ],
        [
            'slug' => 'kos-2',
            'kos' => 'Kos Angkasa Merah',
        ]
    ];

    $roomDetail = Arr::first($rooms, function ($detail) use ($slug) {
        return $detail['slug'] == $slug;
    });

    $dormDetail = Arr::first($dorms, function ($detail) use ($roomDetail) {
        return $detail['slug'] == $roomDetail['dorm_slug'];
    });

    $bulan = $request->input('bulan');
    $tanggal = $request->input('tanggal');
    $totalHarga = $roomDetail['price'] * $bulan;

    // Store booking details in the session
    $history = Session::get('history', []);
    $history[] = [
        'kos' => $dormDetail['kos'],
        'kamar' => $roomDetail['title'],
        'harga' => $totalHarga,
        'tanggal' => $tanggal,
    ];
    Session::put('history', $history);

    return redirect('/tagihan')->with([
        'title' => 'Tagihan Page',
        'rooms' => $roomDetail,
        'bulan' => $bulan,
        'tanggal' => $tanggal,
        'totalHarga' => $totalHarga
    ]);
});

Route::get('/tagihan', function () {
    return view('tagihanpage/tagihan');
});

Route::get('/history', function () {
    $history = Session::get('history', []);
    Session::forget('history'); // Clear the history data from the session
    return view('historypay/history', ['history' => $history]);
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
