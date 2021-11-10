<?php

use Illuminate\Database\Seeder;

class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            
            "person_id" => "taro",
            "member" =>"aaa",
            "checkIn" => "111",
            "checkOut" => "111"
        ];
        DB::table('reseves')->insert($param);

        
    }
}
