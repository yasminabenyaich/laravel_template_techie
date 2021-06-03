<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("services")->insert([
            "titre"=>"ExempleTitre",
            "icone"=>"icofont-computer",
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem eaque quibusdam optio repudiandae labore. Laudantium, harum eos dicta nam non cumque numquam tenetur ratione at praesentium, nesciunt, dignissimos consequatur officia.",
            
            "created_at"=>now(),
        ]);
        DB::table("services")->insert([
            "titre"=>"Dolor Sitema",
            "icone"=>"icofont-chart-bar-graph",
            "description"=>"Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata",

            "created_at"=>now(),
        ]);
    }
}
