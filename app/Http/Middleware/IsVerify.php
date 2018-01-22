<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class IsVerify
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
        if (Auth::user()->active == 0) {

                # code...
                return redirect('panel/pengaturan');

                // return $next($request);
        }
    }
}
