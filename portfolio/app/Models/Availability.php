<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
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

    public function reservations()
{
    return $this->hasMany(Reservation::class);
}

}
