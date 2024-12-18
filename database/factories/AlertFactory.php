<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alert>
 */
class AlertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "latitude"=>fake()->randomFloat(10,40),
            "longitude"=>fake()->randomFloat(10,40),
            "ville"=>fake()->name(),
            "commune"=>fake()->name(),
            "quartier"=>fake()->name(),
            "status"=>fake()->randomElement(["1","0"]),
            'service_id'=>fake()->numberBetween(1,5),
            'user_id'=>fake()->numberBetween(1,5),
        ];
    }
}
