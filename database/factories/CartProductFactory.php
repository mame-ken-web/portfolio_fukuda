<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Cart;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CartProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cart_id' => Cart::inRandomOrder()->value('id') ?? Cart::factory(),
            'product_id' => Product::inRandomOrder()->value('id') ?? Product::factory(),
            'quantity' => $this->faker->numberBetween(1, 10),
        ];
    }
}
