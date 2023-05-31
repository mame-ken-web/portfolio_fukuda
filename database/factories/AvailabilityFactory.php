<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Availability;
use App\Models\Classroom;
use App\Models\Timeslot;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Availability>
 */
class AvailabilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Availability::class;

    public function definition(): array
    {
        return [
            'classroom_id' => Classroom::inRandomOrder()->value('id') ?? Classroom::factory(),
            'available_date' => $this->faker->date(),
            'timeslot_id' => Timeslot::inRandomOrder()->value('id') ?? Timeslot::factory(),
        ];
    }
}
