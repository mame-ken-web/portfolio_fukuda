<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'is_urgent'
    ];

    public function tags()
{
    return $this->belongsToMany(AnnouncementTag::class, 'announcement_tag_links');
}
}
