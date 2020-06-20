<?php

use Illuminate\Database\Seeder;

class ParkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fp = file_get_contents(storage_path('/json/park.json'));
        //ファイルの内容を解釈できるようにする
        $json = json_decode($fp, true);
        $data = $json["data"];

        //バルクインサート
        $isInsert = \DB::table('parks')->insert($data);
    }
}
