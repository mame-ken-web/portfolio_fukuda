<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\ProductImage;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImage>
 */
class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = ProductImage::class;

    public function definition(): array
    {
        return [
            'product_id' => Product::inRandomOrder()->value('id') ?? \App\Models\Product::factory(),
            'image_path' => $this->faker->imageUrl(),

        ];
    }
}
