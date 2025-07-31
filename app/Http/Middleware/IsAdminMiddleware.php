<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->is_admin) {
            return $next($request);
        }

        // Jika bukan admin, redirect ke halaman utama atau tampilkan error 403
        return redirect('/')->with('error', 'Anda tidak memiliki akses admin.');
    }
}
