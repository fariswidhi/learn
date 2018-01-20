<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;
class isAdmin
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



        if(Auth::user() &&  (Auth::user()->type == 2 || Auth::user()->type == 2)){
            return redirect('/panel');
        }

            return $next($request);


    }
}
