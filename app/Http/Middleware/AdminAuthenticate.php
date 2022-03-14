<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    protected $guard ='admins';
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard='admins')
    {
    //The following line(s) will be specific to your project, and depend on whatever you need as an authentication.
    $isAuthenticatedAdmin = (auth($guard)->check() );

    //This will be excecuted if the new authentication fails.
    if (! $isAuthenticatedAdmin){
    return redirect()->route('admlogin');}
    return $next($request);
    }
}
