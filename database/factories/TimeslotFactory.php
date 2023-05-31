<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Timeslot>
 */
class TimeslotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startHour = $this->faker->numberBetween(8, 18); // 8AM - 6PM
        $startMinute = $this->faker->numberBetween(0, 59);

        $endHour = $startHour + $this->faker->numberBetween(1, 3); // 1 - 3 hours duration
        $endMinute = $this->faker->numberBetween(0, 59);

        return [
            'start_time' => sprintf('%02d:%02d:00', $startHour, $startMinute),
            'end_time' => sprintf('%02d:%02d:00', $endHour, $endMinute),
        ];
    }
}
