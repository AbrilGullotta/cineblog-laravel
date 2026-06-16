<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolMiddleware
{
    public function handle(Request $request, Closure $next, string $rol): Response
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $usuario = auth()->user();

        if (!$usuario->rol || $usuario->rol->nombre !== $rol) {
            abort(403, 'No tenés permisos para acceder a esta sección.');
        }

        return $next($request);
    }
}