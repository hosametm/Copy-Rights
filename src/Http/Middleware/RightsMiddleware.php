<?php

namespace Hosametm\CopyRight\Http\Middleware;

use Closure;

class RightsMiddleware
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
        if ($request->has('violated')) {
            dd('You are violating the rights');
        }

        // Proceed to the next middleware/request handler
        return $next($request);
    }
}
