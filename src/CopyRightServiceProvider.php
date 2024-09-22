<?php

namespace Hosametm\CopyRight;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\Kernel;
use Illuminate\Support\ServiceProvider;
use Hosametm\CopyRight\Http\Middleware\RightsMiddleware;

class CopyRightServiceProvider extends ServiceProvider
{

    public function boot(Kernel $kernel): void
    {
        // register the middleware for web and api routes
        $this->app['router']->middleware('rights', RightsMiddleware::class);
    }


    public function register(): void {}
}
