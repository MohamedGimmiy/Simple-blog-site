<?php

namespace App\Http\Middleware;

use Closure;

class middlewareAdmin
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
        // if user is authenticated and  admin
        if(auth()->user() && auth()->user()->role == 1) {
            return $next($request);
        } else {
            abort(404);
        }
    }
}
