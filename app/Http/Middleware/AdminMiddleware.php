<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (auth::check() && Auth::user()->role == 'admin') {
            return $next($request);
        } else {
            return redirect()->route(Auth::user()->role . ".dashboard");
        }

        //ada 2 kondisi jika authentifikasinya di cek rolenya benar admin maka melanjutkan perintah berikutnya
        //apabila role nya bukan admin maka ke halaman dashboard

        // if ($request->user() && !$request-> user()->isAdmin()) {
        //     return redirect ('/dashboard');
        // }

        // return $next($request);
    }
}
