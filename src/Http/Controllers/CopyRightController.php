<?php

namespace Hosametm\CopyRight\Http\Controllers;

use App\Http\Controllers\Controller;
use Hosametm\CopyRight\Http\Services\CopyRightService;

class CopyRightController extends Controller
{
    public function flush(CopyRightService $copyRightService)
    {
        return $copyRightService->flush();
    }
}
