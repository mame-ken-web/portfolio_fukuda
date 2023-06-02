<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sizes = [1,2,3,4];

        DB::table('product_sizes')->insert(
            collect($sizes)->map(function($size) {
                return ['size' => $size];
            })->toArray()
        );
    }
}
