<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Availability;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $availabilityId = Availability::inRandomOrder()->value('id') ?? Availability::factory();

    return [
        'availability_id' => $availabilityId,
        'status' => $this->faker->numberBetween(1,3),
    ];
    }
}
