<?php

use Illuminate\Support\Facades\Route;
use Hosametm\CopyRight\Http\Controllers\CopyRightController;

Route::get('/flush', [CopyRightController::class, 'flush']);
