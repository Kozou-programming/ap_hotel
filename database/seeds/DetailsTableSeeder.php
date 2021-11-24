<?php

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $param =[
            "detailId" =>"123",
            "reserveId" => "123",
            "roomId" => "123",
            "date" =>"456",
            "price" => "10000"
        ];
        DB::table('details')->insert($param);
    
    }
}
