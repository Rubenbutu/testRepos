<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ServiceSeeder::class);
        // \App\Models\Service::factory(10)->create();
        // \App\Models\Commune::factory(25)->create();
        // \App\Models\Quartier::factory(25)->create();
        $this->call(UsersSeeders::class);
        // \App\Models\User::factory(10)->create();
        // \App\Models\Alert::factory(10)->create();
        // \App\Models\Deces::factory(50)->create();
        // \App\Models\Naissance::factory(10)->create();
        // \App\Models\Retrouve::factory(10)->create();
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
