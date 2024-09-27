<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if (Auth::guard($guards)->guest()) {
            return redirect()->route('login'); // Redirect to login if not authenticated
        }

        return $next($request);
    }

    protected function redirectTo($request)
    {
        return route('login'); // Change this to your desired redirect
    }
}
