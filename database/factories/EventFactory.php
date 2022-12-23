<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence($nbWords = 3, $variableNbWords = true),
            'short_description' => fake()->text(200),
            'date' => fake()->dateTime(),
            'amount' => fake()->randomDigit(),
            'genre_id' => 1,
            'venue_id' => 1
        ];
    }
}