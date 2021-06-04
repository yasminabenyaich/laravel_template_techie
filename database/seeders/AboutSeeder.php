<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //LIEN IMAGES A CHECKER
        DB::table("about")->insert([
            "titre"=>"Dolor Sitema",
            "description"=>"icofont-chart-bar-graph",
            "image"=>"",

            "created_at"=>now(),
        ]);
        DB::table("about")->insert([
            "titre"=>"Dolor Sitema",
            "description"=>"icofont-chart-job-graph",
            "image"=>"",

            "created_at"=>now(),
        ]);
    }
}
