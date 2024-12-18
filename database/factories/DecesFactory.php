<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deces>
 */
class DecesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom_defunt"=>fake()->name(),
             "postnom_defunt"=>fake()->name(),
             "prenom_defunt"=>fake()->name(),
             "sexe_defunt"=>fake()->randomElement(["Masculin","Feminin"]),
             "lieu_naissance_defunt"=>fake()->name(),
             "date_naissance_defunt"=>fake()->date(),
             "proffesion_defunt"=>fake()->name(),
             "etat_civil_defunt"=>fake()->randomElement(["Epoux","Celibataire"]),
             "nom_conjoint"=>fake()->name(),
             "date_deces"=>fake()->date(),
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
