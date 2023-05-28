<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $productId = 1;
    $quantity = fake()->numberBetween(20, 100);  // 購入数量

    return [
        'product_id' => $productId++,
        'quantity' => $quantity,
    ];
    }
}
