<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Constants\OrderStatusConstants;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\ProductCategory;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Stock;
use App\Models\Inquiry;

use App\Models\Announcement;
use App\Models\AnnouncementTag;
use App\Models\HeroImage;
use App\Models\CartProduct;
use App\Models\Cart;
use App\Models\Classroom;
use App\Models\Timeslot;
use App\Models\Availability;
use App\Models\Reservation;
use App\Models\ReservationUser;
use App\Models\ProductImage;
use Illuminate\Support\Arr;

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
        $products = Product::factory(50)->create();
        ProductVariation::factory(50)->create();
        $this->call(ProductSizeSeeder::class);
        $productSizes = DB::table('product_sizes')->pluck('id');

        foreach ($products as $product) {
            $product->sizes()->attach(
                $productSizes->random(rand(1, 4))
            );
        }


        // あらかじめ定義していたユーザーと商品を作成
        $users = DB::table('users')->get();
        $products = Product::all();

        // 各ユーザーがいくつかの注文を持っているようにする
        foreach ($users as $user) {
            $orders = Order::factory(rand(2, 5))->make(['user_id' => $user->id]);

            foreach ($orders as $order) {
                $order->total = 0;
                $order->status = Arr::random(array_keys(OrderStatusConstants::STATUS_MAP));

            $order->save();  // ここで保存。
                $orderProducts = OrderProduct::factory(rand(2, 10))->make();

                $total = 0;
                foreach ($orderProducts as $orderProduct) {
                    $orderProduct->order_id = $order->id;
                    $productPrice = $products->firstWhere('id', $orderProduct->product_id)->price;
                    $orderProduct->price = $productPrice * $orderProduct->quantity;
                    $total += $orderProduct->price;
                    $orderProduct->save();
                }

                $order->total = $total;
                $order->save();
            }
        }


        Stock::factory(50)->create();

        ProductCategory::factory(10)->create();

        foreach ($products as $product) {
            $categories = ProductCategory::query()->inRandomOrder()->take(rand(1, 5))->get();
            
            $product->categories()->attach($categories);
        };

        Cart::factory(10)->create();
        Inquiry::factory(20)->create();
        AnnouncementTag::factory(5)->create();
        Announcement::factory(20)->create();
        HeroImage::factory(3)->create();
        CartProduct::factory(10)->create();
        Classroom::factory(5)->create();
        Timeslot::factory(5)->create();
        Availability::factory(5)->create();
        Reservation::factory(30)->create();
        ReservationUser::factory(20)->create();
        ProductImage::factory(30)->create();

    }


}
