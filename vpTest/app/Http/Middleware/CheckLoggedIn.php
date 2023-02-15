<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLoggedIn
{
    public function handle(Request $request, Closure $next)
    {
        // dd($request->session()->get('logged_in'));
        if (! $request->session()->get('logged_in')) {
            return redirect('/login');
        }

        return $next($request);
    }
}