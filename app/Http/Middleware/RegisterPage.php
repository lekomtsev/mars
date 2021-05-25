<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RegisterPage
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
        if ($request->route('page') !== 'pages') {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
