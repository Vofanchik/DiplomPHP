<?php

namespace Database\Factories;
use App\Models\Hall;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sess>
 */
class SessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hall_id' => fake()->numberBetween(1, Hall::latest()->first()->id),
            'movie_id' => fake()->numberBetween(1, Movie::latest()->first()->id),
            'start_at' => fake()->dateTimeBetween('-1 week', '+1 week')
        ];
    }
}
