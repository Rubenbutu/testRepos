<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Retrouve>
 */
class RetrouveFactory extends Factory
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
            "sexe"=>fake()->randomElement(["Masculin","Feminin"]),
            "age"=>fake()->numberBetween(10,100),
            "piece_identite"=>fake()->name(),
            "photo"=>fake()->imageUrl(),
            "date"=>fake()->date(),
            "lieu"=>fake()->name(),
            "user_id"=>fake()->numberBetween(1,5)

        ];
    }
}
