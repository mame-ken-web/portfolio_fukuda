<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
  

    class OrderFactory extends Factory
    {
        /**
         * The name of the factory's corresponding model.
         *
         * @var string
         */
        protected $model = Order::class;
    
        /**
         * Define the model's default state.
         *
         * @return array
         */
        public function definition()
        {
           
            return [
                
            ];
        }
    
       
    }