<?php

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class KindsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "kindsId" => 1,
            "typeName" =>"single",
            "numberOfPeople" => 1
        ];
        DB::table('kinds')->insert($param);
    }
}
