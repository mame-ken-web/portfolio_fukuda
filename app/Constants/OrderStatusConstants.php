<?php

namespace App\Constants;

class OrderStatusConstants
{
    const STATUS_PENDING = 0;
    const STATUS_CONFIRMED = 1;
    const STATUS_SHIPPED = 2;
    const STATUS_DELIVERED = 3;
    const STATUS_CANCELLED = 4;

    const STATUS_MAP = [
        self::STATUS_PENDING => 'Pending',
        self::STATUS_CONFIRMED => 'Confirmed',
        self::STATUS_SHIPPED => 'Shipped',
        self::STATUS_DELIVERED => 'Delivered',
        self::STATUS_CANCELLED => 'Cancelled',
    ];
}
