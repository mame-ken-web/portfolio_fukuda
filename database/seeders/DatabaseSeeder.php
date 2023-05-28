<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);
        $products = \App\Models\Product::factory(50)->create();
        \App\Models\ProductVariation::factory(50)->create();
        $this->call(ProductSizeSeeder::class);
        $productSizes = DB::table('product_sizes')->pluck('id');
    
        foreach ($products as $product) {
            $product->sizes()->attach(
                $productSizes->random(rand(1, 3))->toArray()
            );
        }
        
        \App\Models\Order::factory(10)->create();
        \App\Models\Stock::factory(50)->create();
        
        
  
        
    }
}
