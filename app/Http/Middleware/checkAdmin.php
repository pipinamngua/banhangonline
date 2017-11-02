<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class checkAdmin
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
        if(!Auth::check()) {
            return redirect('/login');
        } else if(Auth::check() && Auth::user()->group_id != 1 ) {
            die("Access denied !!!");
        } else {
            return $next($request);
        }
    }
}
