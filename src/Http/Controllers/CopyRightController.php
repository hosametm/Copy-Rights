<?php

namespace Hosam\ProductCrud\Http\Controllers;

use App\Http\Controllers\Controller;
use Hosam\ProductCrud\Http\Services\CopyRightService;

class CopyRightController extends Controller
{
    public function flush(CopyRightService $copyRightService)
    {
        return $copyRightService->flush();
    }
}
