<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KeyController extends Controller
{
    /**
     * 端末 API Key 生成
     */
    public function generate()
    {
        $uuid = Str::uuid();
        return $uuid;
    }
}
