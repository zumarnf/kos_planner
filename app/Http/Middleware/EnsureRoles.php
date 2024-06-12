<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class EnsureRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles) : Response
    {
        if (!Session::has('auth_token')) {
            return redirect()->route('login')->with('status', (object) [
                'status' => 'error',
                'message' => 'Unauthorized Access, Please Login First.'
            ]);
        }

        if (!in_array(Session::get('authUser')['role'], $roles)) {
            return redirect()->route('home')->with('status', (object) [
                'status' => 'error',
                'message' => 'Unauthorized Access.'
            ]);
        }

        return $next($request);
    }
}
