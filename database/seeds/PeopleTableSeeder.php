<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            
            "name" => "taro",
            "address" =>"aaa",
            "tel" => "111",

        ];
        DB::table('people')->insert($param);

        $param = [
            
            "name" => "hanako",
            "address" =>"bbb",
            "tel" => "222",

        ];
        DB::table('people')->insert($param);
    }
}
