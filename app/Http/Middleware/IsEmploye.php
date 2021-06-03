<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsEmploye
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
        if (Auth::user() &&  Auth::user()->isEmploye() == 1) {
            return $next($request);
        }

        return redirect('dashoard')->with('error','Vous n\'avez pas d\'accés');
    }
}
