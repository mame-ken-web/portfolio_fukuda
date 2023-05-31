<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
        'price',
        'description',
        'start_date',
        'end_date',
        'is_on_sale',
    ];

    // この商品が属するカテゴリー
    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_product_category', 'product_id', 'product_category_id');
    }

    // この商品が持つバリエーション
    public function variations()
    {
        return $this->hasMany(ProductVariation::class);
    }

    // この商品が含まれる注文（中間テーブルを経由）
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_products')->withPivot('quantity', 'price');
    }

    // この商品の在庫情報
    public function stock()
    {
        return $this->hasOne(Stock::class);
    }

    // この商品が含まれるカート
    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_product')->withPivot('quantity');
    }

    // この商品のサイズ情報
    public function sizes()
    {
        return $this->belongsToMany(ProductSize::class, 'product_product_size', 'product_id', 'product_size_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
