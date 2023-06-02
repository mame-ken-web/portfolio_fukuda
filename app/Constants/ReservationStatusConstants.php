<?php

namespace App\Constants;

class ReservationStatusConstants 
{
    const STATUS_RESERVED = 1; // 予約済み
    const STATUS_CANCELED = 2; // キャンセル済み
    const STATUS_PENDING = 3; // 保留中

    // 状態名と数値のマッピング
    const STATUS_MAP = [
        self::STATUS_RESERVED => 'Reserved',
        self::STATUS_CANCELED => 'Canceled',
        self::STATUS_PENDING => 'Pending',
    ];
}
