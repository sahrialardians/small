<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // cek usernya login atau tidak dan rolenya cek siapa
        if(Auth::user() && Auth::user()->role == "ADMIN"){
            return $next($request);
        }
        return redirect('/');
    }
}
