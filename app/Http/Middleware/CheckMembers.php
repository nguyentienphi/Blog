<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckMembers
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
        if (Auth::check() && Auth::user()->role_id == config('blog.admin') ){
            Auth::logout();
            return redirect()->route('login');
        } else {
            return $next($request);
        }
    }
}
