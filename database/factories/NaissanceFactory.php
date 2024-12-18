<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Naissance>
 */
class NaissanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom"=>fake()->name(),
            "postnom"=>fake()->name(),
            "prenom"=>fake()->name(),
            "date_naissance"=>fake()->date(),
            "sexe"=>fake()->randomElement(["Masculin","Feminin"]),
            // "pointage_naiss_normal"=>fake()->randomElement(["oui","non"]),
            // "pointage_naiss_pediatrie"=>fake()->randomElement(["oui","non"]),
            //  Papa
            "nom_pere"=>fake()->name(),
            "postnom_pere"=>fake()->name(),
            "prenom_pere"=>fake()->name(),
           "lieu_naissance_pere"=>fake()->name(),
           "date_naissance_pere"=>fake()->date(),
           "proffesion_pere"=>fake()->name(),
           "nationalite_pere"=>fake()->name(),
           //mère
           "nom_mere"=>fake()->name(),
           "postnom_mere"=>fake()->name(),
           "prenom_mere"=>fake()->name(),
           "lieu_naissance_mere"=>fake()->name(),
           "date_naissance_mere"=>fake()->name(),
           "proffesion_mere"=>fake()->name(),
           "nationalite_mere"=>fake()->name(),
           "user_id"=>fake()->numberBetween(1,5)
        ];
    }
}
