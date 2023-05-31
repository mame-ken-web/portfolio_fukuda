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
            // $user = User::inRandomOrder()->first();
    
            return [
                // 'user_id' => $user->id,
                // 'total' => 0, // This is just a placeholder. We'll update this later.
                // 'status' => $this->faker->randomElement(['pending', 'processing', 'completed', 'cancelled']),
            ];
        }
    
        // public function configure()
        // {
        //     return $this->afterCreating(function (Order $order) {
        //         $purchases = OrderProduct::factory(rand(1, 3))->make();
        
        //         // Now, assign each of the created OrderProduct instances to this Order
        //         $purchases->each(function ($purchase) use ($order) {
        //             $purchase->order_id = $order->id;
        //             $purchase->save();
        //         });
        
        //         // Update the total field in the order AFTER saving the OrderProducts
        //         $order->total = $purchases->sum(function ($purchase) {
        //             return $purchase->price * $purchase->quantity;
        //         });
        
        //         $order->save();
        //     });
        // }
        
    }