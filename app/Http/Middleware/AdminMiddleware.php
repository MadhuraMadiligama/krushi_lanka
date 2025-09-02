<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated AND if the user's role is 'admin'
        if (Auth::check() && Auth::user()->role == 'admin') {
            // If they are an admin, let them proceed to the next request
            return $next($request);
        }

        // If not an admin, redirect them to the regular user dashboard
        return redirect('/dashboard')->with('error', 'You do not have admin access.');
    }
}
