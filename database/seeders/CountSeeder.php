<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("counts")->insert([
            "chiffre"=>"35",
            "titre"=>"Dolor Sitema",

            "created_at"=>now(),
        ]);
        DB::table("counts")->insert([
            "chiffre"=>"40",
            "titre"=>"Dolor Sitema",

            "created_at"=>now(),
        ]);
        DB::table("counts")->insert([
            "chiffre"=>"31",
            "titre"=>"Dolor Sitema",

            "created_at"=>now(),
        ]);
    }
}
