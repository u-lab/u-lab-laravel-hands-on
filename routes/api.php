<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Hello
Route::get('/v1/hello', 'HelloController@index');

// 変数宣言
Route::get('/v1/hello/var', 'HelloController@varIndex');

// 文字列結合
Route::get('/v1/hello/str-implode', 'HelloController@strImplode');

// 連想配列
Route::get('/v1/hello/array2', 'HelloController@arr2');

// foreach
Route::get('/v1/hello/foreach', 'HelloController@foreachFunc');

// function
Route::get('/v1/hello/function', 'HelloController@funcFunc');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
