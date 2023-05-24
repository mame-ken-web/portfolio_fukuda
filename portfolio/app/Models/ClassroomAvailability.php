<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassroomAvailability extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'classroom_id',
        'available_date',
        'timeslot_id',
    ];

    public function classroom() {
        return $this->belongsTo(Classroom::class);
    }
}
