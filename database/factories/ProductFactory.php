<?php

namespace Database\Factories;
use Faker\Generator as Faker;

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
            'name' => fake()->name(),
            'price' => fake()->numberBetween(100, 1000),
            'description' => fake()->text(),
            'start_date' => fake()->date(),
            'end_date' => null,
            'is_on_sale' => true,
        ];
    }
}
