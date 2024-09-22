<?php

namespace Hosametm\CopyRight;

use Illuminate\Support\Facades\Route;

use Illuminate\Support\ServiceProvider;

class CopyRightServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
    }


    public function register(): void {}
}
