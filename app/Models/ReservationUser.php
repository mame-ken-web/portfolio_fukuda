<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationUser extends Model
{
    use HasFactory;

    protected $table = 'reservation_user';


    protected $fillable = [
        'user_id',
        'reservation_id',
       
    ];
}
