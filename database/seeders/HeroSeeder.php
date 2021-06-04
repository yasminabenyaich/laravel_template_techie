<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //LIEN IMAGE
        DB::table("heroes")->insert([
            "titre"=>"Dolor Sitema",
            "st"=>"une grande histoire",
            "image"=>"",

            "created_at"=>now(),
        ]);
        DB::table("heroes")->insert([
            "titre"=>"Dolor Sitema",
            "st"=>"une sale histoire",
            "image"=>"",

            "created_at"=>now(),
        ]);
    }
}
