<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return 'hello Controller';
    }

    public function varIndex()
    {
        $number = 5;
        $result = $number ** $number; // 5の5乗

        \Log::debug('5の5乗');
        \Log::debug($result); // 3125

        $result = $result ** $number; // 5の5乗の5乗

        \Log::debug('5の5乗の5乗');
        \Log::debug($result); // 3125 ** 5

        return $result;
    }
}
