<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && auth()->user()->isAdmin()) {
            return redirect('/admin_panel');
        }

        if (Auth::guard($guard)->check() && auth()->user()->isUser()) {
            return redirect('/dashboard');
        }

        return $next($request);
    }
}
