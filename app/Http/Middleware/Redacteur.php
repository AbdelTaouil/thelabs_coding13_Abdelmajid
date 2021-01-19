<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Redacteur
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
        if(Auth::User()->roles->role=="Rédacteur" || Auth::User()->roles->role=="Webmaster" || Auth::User()->roles->role=="Admin" ){
            return $next($request);
        } else{
            return redirect()->back();
        }   
    }
}
