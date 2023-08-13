<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class LawyerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber,
            'address' => fake()->address,
            'photo' => fake()->imageUrl('60','60'),
            'role' => fake()->randomElement(['lawyer']),
            'assigned_cases' => fake()->randomElement(['0','1','2','3']),
            'status' => fake()->randomElement(['available','unavailable']),
            'remember_token' => Str::random(10),
        ];
    }

}
