<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(2, true), // ex: "Bluetooth Speaker"
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 5, 500), // ex: 23.50
        ];
    }
}
