<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;

class IsConnected extends Middleware
{
    /**
     */
    public function handle($request, Closure $next)
    {
        if (!$request->session()->has('user')) {
            abort(403);
        }

        return $next($request);
    }
}
