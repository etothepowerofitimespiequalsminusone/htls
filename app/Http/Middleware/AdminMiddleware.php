<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!(Auth::check() && Auth::user()->isAdmin()))
        {
            return redirect('user')->withErrors('Access denied to ADMIN functionality!');
        }
        return $next($request);
    }
}
