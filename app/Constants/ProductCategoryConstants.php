<?php

namespace App\Constants;

class ProductCategoryConstants 
{
    const CATEGORY_ELECTRONICS = 1;
    const CATEGORY_BOOKS = 2;
    const CATEGORY_FURNITURE = 3;
    const CATEGORY_CLOTHING = 4;
    const CATEGORY_TOYS = 5;
    const CATEGORY_GROCERY = 6;
    const CATEGORY_BEAUTY_HEALTH = 7;
    const CATEGORY_SPORTS = 8;
    const CATEGORY_AUTOMOTIVE = 9;
    const CATEGORY_HOME_KITCHEN = 10;

    const CATEGORY_MAP = [
        self::CATEGORY_ELECTRONICS => 'Electronics',
        self::CATEGORY_BOOKS => 'Books',
        self::CATEGORY_FURNITURE => 'Furniture',
        self::CATEGORY_CLOTHING => 'Clothing',
        self::CATEGORY_TOYS => 'Toys',
        self::CATEGORY_GROCERY => 'Grocery',
        self::CATEGORY_BEAUTY_HEALTH => 'Beauty & Health',
        self::CATEGORY_SPORTS => 'Sports',
        self::CATEGORY_AUTOMOTIVE => 'Automotive',
        self::CATEGORY_HOME_KITCHEN => 'Home & Kitchen',
    ];
}
