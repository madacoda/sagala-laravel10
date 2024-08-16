<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DevController extends Controller
{
    function clearCache() {
        Cache::tags(app_key())->flush();

        return response()->json([
            'status'  => 'success',
            'message' => 'Cache cleared successfully'
        ]);
    }
}
