<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function index()
    {
        $response = Http::withToken(session('auth_token'))->get(config('app.baseApiUrl') . '/admin/owners');

        // dd($response->json());

        return view('adminkos/dashboard', [
            'pendingApprove' => $response->json()['pendingApprove'],
            'approved' => $response->json()['approved'],
        ]);
    }

    public function handleApprove(Request $request)
    {
        $id = $request->input('id');

        $response = Http::withToken(session('auth_token'))->patch(config('app.baseApiUrl') . '/admin/owner-approve/' . $id);

        // dd($response->json());

        return redirect()->back()->with('status', (object) $response->json());
    }

    public function handleDecline(Request $request)
    {
        $id = $request->input('id');

        $response = Http::withToken(session('auth_token'))->patch(config('app.baseApiUrl') . '/admin/owner-decline/' . $id);

        return redirect()->back()->with('status', (object) $response->json());
    }

    public function handleDelete(Request $request)
    {
        $id = $request->input('id');

        // dd($id);

        $response = Http::withToken(session('auth_token'))->delete(config('app.baseApiUrl') . '/admin/owner/' . $id);

        return redirect()->back()->with('status', (object) $response->json());
    }
}
