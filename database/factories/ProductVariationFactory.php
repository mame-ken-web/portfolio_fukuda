<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductVariation>
 */
class ProductVariationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array

    {
        $names = ['セット', '期間限定', '色違い', 'スペシャル'];

       
        static $productId = 1;
        
        return [
            'product_id' => $productId++,
            'name' => $names[array_rand($names)],
            'additional_cost' => fake()->numberBetween(100, 10000),
        ];
    }
}
