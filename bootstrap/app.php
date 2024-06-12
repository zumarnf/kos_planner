<?php

use App\Http\Middleware\EnsureGuest;
use App\Http\Middleware\EnsureRoles;
use Illuminate\Foundation\Application;
use App\Http\Middleware\EnsureTokenExists;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth.token' => EnsureTokenExists::class,
            'auth.roles' => EnsureRoles::class,
            'auth.guest' => EnsureGuest::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
