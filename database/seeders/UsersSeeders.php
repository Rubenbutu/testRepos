<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                'nom' =>"Mose",
                'email' => "Ruben@gamil.com",
                'postnom' =>"BUTU",
                'prenom' => "Ruben",
                'sexe' => "Masculin",
                'phone' => "0827107611",
                'adresse' => "kINSHASA",
                'photo' => "imageUrl",
                'type' => "Agent",
                'status' => 1,
                'service_id'=>1,
                // 'quartier_id'=>1,

                "Password"=>Hash::make(1111)
            ],
            [
                'nom' =>"Kassim",
                'email' => "kassim@gamil.com",
                'postnom' =>"Tendele",
                'prenom' => "Ruben",
                'sexe' => "Masculin",
                'phone' => "0835507611",
                'adresse' => "kINSHASA",
                'photo' => "imageUrl",
                'type' => "Agent",
                'status' => 1,
                'service_id'=>2,
                // 'quartier_id'=>1,

                "Password"=>Hash::make(2222)
            ],
            [
                'nom' =>"Ngoyi",
                'email' => "ngoyi@gamil.com",
                'postnom' =>"Pluche",
                'prenom' => "vick",
                'sexe' => "Masculin",
                'phone' => "0835507611",
                'adresse' => "kINSHASA",
                'photo' => "imageUrl",
                'type' => "Agent",
                'status' => 1,
                'service_id'=>3,
                // 'quartier_id'=>1,

                "Password"=>Hash::make(3333)
            ],
            [
                'nom' =>"kalonji",
                'email' => "kalonji@gamil.com",
                'postnom' =>"Pluche",
                'prenom' => "vick",
                'sexe' => "Masculin",
                'phone' => "0835507611",
                'adresse' => "kINSHASA",
                'photo' => "imageUrl",
                'type' => "User",
                'status' => 1,
                'service_id'=>5,
                // 'quartier_id'=>1,

                "Password"=>Hash::make(4444)
            ],
            [
                'nom' =>"admin",
                'email' => "admin1@gmail.com",
                'postnom' =>"Pluche",
                'prenom' => "vick",
                'sexe' => "Masculin",
                'phone' => "0835507611",
                'adresse' => "kINSHASA",
                'photo' => "imageUrl",
                'type' => "Admin",
                'status' => 1,
                'service_id'=>1,
                // 'quartier_id'=>1,

                "Password"=>Hash::make(1111)
            ],
            [
                'nom' =>"admin2",
                'email' => "admin2@gmail.com",
                'postnom' =>"Pluche",
                'prenom' => "vick",
                'sexe' => "Masculin",
                'phone' => "0835507611",
                'adresse' => "kINSHASA",
                'photo' => "imageUrl",
                'type' => "Admin",
                'status' => 1,
                'service_id'=>2,
                // 'quartier_id'=>1,

                "Password"=>Hash::make(1222)
            ],
            [
                'nom' =>"admin",
                'email' => "admin3@gmail.com",
                'postnom' =>"Pluche",
                'prenom' => "vick",
                'sexe' => "Masculin",
                'phone' => "0835507611",
                'adresse' => "kINSHASA",
                'photo' => "imageUrl",
                'type' => "Admin",
                'status' => 1,
                'service_id'=>3,
                // 'quartier_id'=>1,

                "Password"=>Hash::make(1333)
            ],
            [
                'nom' =>"admin",
                'email' => "admin4@gmail.com",
                'postnom' =>"Pluche",
                'prenom' => "vick",
                'sexe' => "Masculin",
                'phone' => "0835507611",
                'adresse' => "kINSHASA",
                'photo' => "imageUrl",
                'type' => "Admin",
                'status' => 1,
                'service_id'=>4,
                // 'quartier_id'=>1,

                "Password"=>Hash::make(14444)
            ],
           
           
           

        ]);
    }
}
