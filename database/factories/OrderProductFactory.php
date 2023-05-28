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
    public function definition(): array
    {
        $product = Product::inRandomOrder()->first();
        $quantity = fake()->numberBetween(1, 5);  // 購入数量
    
        return [
            'order_id' => null,  // これは後で設定
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price' => $product->price * $quantity,  // 商品の価格に数量を掛ける
        ];
    }
}
