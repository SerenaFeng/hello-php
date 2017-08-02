<?php

namespace App\Http\Middleware;

use Closure;

class CheckID
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
        if ($request->id > 100) {
            return redirect('home');
        }
        return $next($request);
    }
}
