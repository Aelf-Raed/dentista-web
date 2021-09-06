<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $admin = auth()->user()->tipo;

        if ($admin == 'Administrador') {
          return $next($request);
        }else {
          abort(403,'No tienes los permisos suficientes.');
        }

    }
}
