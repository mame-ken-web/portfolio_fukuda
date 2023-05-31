<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reservation;
use App\Models\ReservationUser;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReservationUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = ReservationUser::class;


    public function definition(): array
    {
        return [
            'reservation_id' => Reservation::inRandomOrder()->value('id') ?? Reservation::factory(),
            'user_id' => User::inRandomOrder()->value('id') ?? User::factory(),
        ];
    }
}
