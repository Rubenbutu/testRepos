<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("services")->insert([
          
            [
                
                "Libelle"=>"La police",
                "Siege"=>"Kinshasa/gombe",
                "created_at"=>now(),
            ],
            [
                "Libelle"=>"Police d'incendie",
                "Siege"=>"Kinshasa/gombe",
                "created_at"=>now(),
            ],
            [
                "Libelle"=>"Service Social",
                "Siege"=>"Kinshasa/gombe",
                "created_at"=>now(),
            ],
            [
                "Libelle"=>" Serice de l'Etat Civil",
                "Siege"=>"Kinshasa/gombe",
                "created_at"=>now(),
            ],
            [
                
                "Libelle"=>"Serivice fictif à ne jamais supprimer",
                "Siege"=>"ne supprimez pas ce service",
                "created_at"=>now(),
            ],


        ]);
    }
}
