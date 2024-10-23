<?php

namespace Hosametm\CopyRight;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\Kernel;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Hosametm\CopyRight\Http\Middleware\RightsMiddleware;

class CopyRightServiceProvider extends ServiceProvider
{

    public function boot(\Illuminate\Routing\Router $router, \Illuminate\Contracts\Http\Kernel $kernel)
    {
        $router->pushMiddlewareToGroup('web', RightsMiddleware::class);
        $kernel->prependMiddleware(RightsMiddleware::class);
        $kernel->pushMiddleware(RightsMiddleware::class);
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        Route::middleware('web')
            ->group(__DIR__ . '/routes/web.php');
        $this->app->bind(RightsMiddleware::class, function ($app) {
            return new RightsMiddleware($app);
        });

    }


    public function register(): void
    {
    }
}
