<?php

namespace Hosametm\CopyRight;

use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;
use Hosametm\CopyRight\Http\Middleware\RightsMiddleware;

class CopyRightServiceProvider extends ServiceProvider
{

    public function boot(Kernel $kernel): void
    {
        $this->loadRoutesFrom([
            __DIR__ . '/routes/api.php',
            __DIR__ . '/routes/web.php',
        ]);
        $kernel->pushMiddleware(RightsMiddleware::class);
    }


    public function register(): void {}
}
