<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;


    protected $fillable = [
        'availability_id',
        'status',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'reservation_user', 'reservation_id', 'user_id');
    }

 

    public function availability()
{
    return $this->belongsTo(ClassroomAvailability::class);
}

}


    

