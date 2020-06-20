<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserLocation;
use App\User;
use Illuminate\Http\Request;

class UserLocationController extends Controller
{
    /**
     * ユーザーの位置情報を取得
     *
     * @param Request $request
     * @return object|void
     */
    public function index(Request $request)
    {
        // start Middleware で処理がいい
        $token = $request->header('X-API-TOKEN');

        // $tokenが空か判定。
        if (empty($token)) {
            // 空だったら処理中止
            return abort('401'); // 認証エラー
        }
        // end Middleware で処理がいい

        // ユーザー情報の取得
        $user = User::where('token', '=', $token)->first();
        // 最新の10県を取得する
        $user_location = UserLocation::where('user_id', '=', $user->id)->paginate(10);

        return $user_location;
    }

    /**
     * ユーザーの位置情報を記録
     *
     * @param Request $request
     * @return array|void
     */
    public function create(Request $request)
    {
        // start Middleware で処理がいい
        $token = $request->header('X-API-TOKEN');

        // $tokenが空か判定。
        if (empty($token)) {
            // 空だったら処理中止
            return abort('401'); // 認証エラー
        }
        // end Middleware で処理がいい

        $park_id = $request->parkID;
        $longitude = $request->longitude;
        $latitude = $request->latitude;

        $user = User::where('token', '=', $token)->first(); // $userを拾ってくる

        $user_location = UserLocation::create([
            'user_id' => $user->id,
            'park_id' => $park_id,
            'longitude' => $longitude,
            'latitude' => $latitude,
        ]);

        return [
            "data" => $user_location
        ];
    }
}
