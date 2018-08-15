<?php

namespace App\Http\Middleware;
use Cart;
use Closure;

class VerifyCartSession
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
         if(Cart::content()->count()!=0)
        {
            return $next($request);
        }
        else
        {
            return redirect('/home');
        }
    }
}
