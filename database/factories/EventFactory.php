<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'location' => $this->faker->city,
            'image' => $this->faker->imageUrl(),
            'places_available' => $this->faker->numberBetween(50, 200),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'category_id' => \App\Models\Category::factory(),
        ];
    }
}