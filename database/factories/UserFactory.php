<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'postnom' => fake()->name(),
            'prenom' => fake()->name(),
            'sexe' => fake()->randomElement(["Masculin","Feminin"]),
            'phone' => fake()->phoneNumber(),
            'adresse' => fake()->phoneNumber(),
            'photo' => fake()->imageUrl('60','60'),
            'type' => fake()->randomElement(["Agent","Admin","User"]),
            'status' => fake()->randomElement(["1","0"]),
            'service_id'=>fake()->randomElement([1,2,3]),
            // 'quartier_id'=>fake()->randomElement([1,2,3]),
            'email_verified_at' => now(),
            'Password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}