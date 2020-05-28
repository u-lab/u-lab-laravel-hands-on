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

    public function strImplode()
    {
        $str1 = 'hello';
        $str2 = 'world';

        // $str1 .= $str2; // 'helloworld'

        // 文字列結合 1
        $implode = $str1 . ' ' . $str2 ; // hello world

        // 文字列結合 2
        // $implode = "{$str1} ああ {$str2}";

        return $implode;
    }


    public function arr2()
    {
        // $arr = [
        //     ['abc', 'edf'],
        //     ['ghi', 'jkl']
        // ];


        // object
        $arr = [
            "data" => ['abc', 'edf'],
            "meta" => ['ghi', 'jkl']
        ];

        // $data = $arr["data"]; // dataだけを取り出す

        return $arr;
    }
}
