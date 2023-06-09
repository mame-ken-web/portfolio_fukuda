<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\OrderProduct;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\OrderProduct::class;

    public function definition():array
    {
        $quantity = $this->faker->numberBetween(1, 10);

        return [
            'product_id' => Product::all()->random()->id,
            'quantity' => $quantity,
        ];
    }
}
