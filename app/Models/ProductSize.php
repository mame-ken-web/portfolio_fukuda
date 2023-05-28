<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;

    protected $fillable = [
        'size',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_product_size', 'product_size_id', 'product_id');
    }
}
