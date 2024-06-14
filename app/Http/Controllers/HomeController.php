<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $allDorms = Http::get(config('app.baseApiUrl') . '/allDorms');

        return view('pages.home.index', [
            'dorms' => $allDorms->json()
        ]);
    }
}
