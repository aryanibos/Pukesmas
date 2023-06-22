<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Mendapatkan role user yang sedang login
        $user = Auth::user();

        foreach ($roles as $role) {
            // Jika role user yang sedang login sama dengan role yang diminta
            if ($role == $user->role) {
                // Maka lanjutkan ke halaman yang diminta
                return $next($request);
            }
            // // Jika tidak, maka kembalikan ke halaman sebelumnya
            // return redirect()->back();
        }
        // Jika tidak, maka kembalikan ke halaman sebelumnya
        return redirect()->back();
        // // Jika role tidak sesuai, maka tampilkan halaman 403
        // return abort(403);
    }
}