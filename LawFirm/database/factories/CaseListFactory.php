<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CaseListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Client_Name' => fake()->name(),
            'Assigned_Lawyer_ID' => fake()->id,
            'status' => fake()->randomElement(['assigned','unassigned']),
            'remember_token' => Str::random(10),
        ];
    }

}