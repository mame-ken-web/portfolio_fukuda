<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'classroom_id',
        'reservation_date',
        'timeslot_id',
        'status',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'reservation_user', 'reservation_id', 'user_id');
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function timeslot()
    {
        return $this->belongsTo(Timeslot::class);
    }
}


    

