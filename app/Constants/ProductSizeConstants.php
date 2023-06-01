<?php

namespace App\Constants;



class ProductSizeConstants
{
    //...
    const SIZE_SMALL = 1;
    const SIZE_MEDIUM = 2;
    const SIZE_LARGE = 3;
    const SIZE_XLARGE = 4;

    // 追加: サイズ名と数値のマッピング
    const SIZE_MAP = [
        self::SIZE_SMALL => 'S',
        self::SIZE_MEDIUM => 'M',
        self::SIZE_LARGE => 'L',
        self::SIZE_XLARGE => 'XL',
    ];
}
