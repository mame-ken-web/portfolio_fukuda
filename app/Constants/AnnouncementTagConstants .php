<?php

namespace App\Constants;

class AnnouncementTagConstants 
{
    const TAG_NOTICE = 1;
    const TAG_UPDATE = 2;
    const TAG_EVENT = 3;
    const TAG_ALERT = 4;
    const TAG_PROMOTION = 5;

    const TAG_MAP = [
        self::TAG_NOTICE => 'Notice',
        self::TAG_UPDATE => 'Update',
        self::TAG_EVENT => 'Event',
        self::TAG_ALERT => 'Alert',
        self::TAG_PROMOTION => 'Promotion',
    ];
}
