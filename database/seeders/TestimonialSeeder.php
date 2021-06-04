<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //lien des images
        DB::table("heroes")->insert([
            "description"=>"une grande histoire",
            "pdp"=>"",
            "nom"=>"John",
            "job"=>"assureur",

            "created_at"=>now(),
        ]);
        DB::table("heroes")->insert([
            "description"=>"une sale histoire",
            "pdp"=>"",
            "nom"=>"Alain",
            "job"=>"humoriste",

            "created_at"=>now(),
        ]);
        
    }
}
