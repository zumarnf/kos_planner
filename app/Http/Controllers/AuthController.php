<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $response = Http::post('http://server.test/api/v1/login', [
            'email' => $request['email'],
            'password' => $request['password'],
        ]);

        if ($response->json()['status'] === 'success') {
            session([
                'authUser' => $response->json()['data'],
                'auth_token' => $response->json()['token'],
            ]);

            if ($response->json()['data']['role'] === 'admin') {
                return redirect()->route('dashboard');
            }

            return redirect()->route('home');
        } else {
            return redirect()->back()->with('status', (object) $response->json());
        }
    }

    public function doRegister(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'gender' => ['required'],
        ]);

        $response = Http::post('http://server.test/api/v1/register', [
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'password' => $request['password'],
            'gender' => $request['gender'],
        ]);

        if ($response->json()['status'] === 'success') {
            return redirect()->back()->with('status', (object) [
                'status' => 'success',
                'message' => 'Berhasil Registrasi'
            ]);
        } else {
            return redirect()->back()->with('status', (object) $response->json());
        }
    }

    public function doLogout()
    {
        $response = Http::withToken(session('auth_token'))->post('http://server.test/api/v1/logout');

        session()->forget('auth_token');

        if ($response->json()['status'] === 'success') {
            return redirect()->route('home');
        }

        return redirect()->back()->with('message', 'Error');
    }
}
