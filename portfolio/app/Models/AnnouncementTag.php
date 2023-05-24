<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnouncementTag extends Model
{
    use HasFactory;
    public function announcements()
{
    return $this->belongsToMany(Announcement::class, 'announcement_tag_links');
}
}
