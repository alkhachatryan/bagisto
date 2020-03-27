<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfEnvIsDevelopment
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
        return config('app.env') === 'development' ? $next($request) : redirect( route('admin.dashboard.index') );
    }
}
