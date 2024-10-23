<?php

namespace Hosametm\CopyRight;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\Kernel;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Hosametm\CopyRight\Http\Middleware\RightsMiddleware;

class CopyRightServiceProvider extends ServiceProvider
{

    public function boot(\Illuminate\Contracts\Http\Kernel $kernel)
    {
        $kernel->pushMiddleware(RightsMiddleware::class);
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }


    public function register(): void
    {
    }
}
