<?php

namespace App\Http\Middleware;

use Closure;

// NOTE: add library login
use Illuminate\Support\Facades\Auth;

class AdminLoginMiddleware
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
        if(Auth::check())
        {
            return $next($request);
        }
        return redirect('admin/login');
    }
}