<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class AuthenticateMiddleware
{
    public function handle($request, Closure $next)
    {
        if($user = Auth::user())
        {
            return $next($request);
        }
        else
            return redirect('login');
    }
}
