<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Footer>
 */
class FooterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'address' => fake()->address(),
            // 'telephone' => fake()->phoneNumber(),
            // 'cell_phone' => fake()->phoneNumber(),
            // 'email_primary' => fake()->unique()->safeEmail(),
            // 'email_secondary' => fake()->unique()->safeEmail(),
        ];
    }
}
