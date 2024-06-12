<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class EnsureGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next) : Response
    {
        if (Session::has('auth_token')) {
            return redirect()->route('home')->with('status', (object) [
                'status' => 'error',
                'message' => 'Wes login cok'
            ]);
        }

        return $next($request);
    }
}
