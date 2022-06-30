<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestingAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Can you just uncomment below and fix it?
        /* if ( !$request->user() ){
            return redirect()->route("test-4");
        }*/

        return $next($request);
    }
}
