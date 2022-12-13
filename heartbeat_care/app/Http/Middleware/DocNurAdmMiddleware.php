<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DocNurAdmMiddleware
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
        if (Auth::check()) {

            if (Auth::user()->position == "Doctor" or Auth::user()->position == "Nurse" or Auth::user()->position == "Admin"){

                return $next($request);
            } else {

                return redirect('/home')->with('message', 'ACCESS DENIED');
            }
        } else {

            return redirect('/home')->with('login_message', 'Log-in Required');
        }
    }
}
