<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            //"id" => "123",
            "person_id" => "123",
            "member" =>"123",
            "checkIn" => "2018-01-01",
            "checkOut" => "2018-01-02"
        ];
        DB::table('reserves')->insert($param);

        
    }
}
