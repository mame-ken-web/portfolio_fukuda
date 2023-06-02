<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductCategory;
use App\Constants\ProductCategoryConstants;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategory>
 */
class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
       
                'name' => $this->faker->randomElement(array_keys(ProductCategoryConstants::CATEGORY_MAP)),
                'parent_id' => null,
            ];
            

        
    }
}
