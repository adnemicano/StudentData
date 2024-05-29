<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if ($request->user()->isUser()) {
        //     return redirect('/dashboard-user');
        // }

        // return $next($request);

        if (auth::check() && Auth::user()->role == 'user') {
            return $next($request);
        } else {
            return redirect()->route(Auth::user()->role . ".dashboard");
        }

        //ada 2 kondisi jika authentifikasinya di cek rolenya benar user maka melanjutkan perintah berikutnya
        //apabila role nya bukan user maka ke halaman dashboard
    }
}
