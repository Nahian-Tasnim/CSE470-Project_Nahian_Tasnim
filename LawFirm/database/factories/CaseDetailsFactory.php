<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CaseDetailsFactory extends Factory
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
            'Paralegal_ID' => fake()->id,
            'email' => fake()->unique()->safeEmail(),
        
            'phone' => fake()->phoneNumber,
            'Opening_Date' => fake()->openingDate,
            'Closing_Date' => fake()->closingDate,

            'photo' => fake()->imageUrl('60','60'),
            'role' => fake()->randomElement(['admin','lawyer','firmleader','financeteam']),
            'status' => fake()->randomElement(['active','inactive']),
            'remember_token' => Str::random(10),
        ];
    }

  
}
