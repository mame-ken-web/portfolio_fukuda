<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Announcement;
use App\Models\AnnouncementTag;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6),
            'content' => $this->faker->paragraph(4),
            'is_urgent' => $this->faker->boolean(20),
        ];
    }

    public function configure()
{
    return $this->afterCreating(function (Announcement $announcement) {
        $tags = AnnouncementTag::inRandomOrder()->take(rand(1, 5))->pluck('id');
        $announcement->tags()->attach($tags);
    });
}
}
