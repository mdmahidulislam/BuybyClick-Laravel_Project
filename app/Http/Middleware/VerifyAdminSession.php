<?php

namespace App\Http\Middleware;

use Closure;

class VerifyAdminSession
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
         if($request->session()->has('admin') && $request->session()->get('role')=='admin')
        {
            return $next($request);
        }
        else
        {
            return redirect('/adminlogin');
        }
    }
}
