<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PeopleTableSeeder::class);//会員情報
         $this->call(ReservesTableSeeder::class);//予約情報
    }
}
