<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Opponent>
 */
class OpponentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $names = [
            'Chicago White Sox',
            'Chicago Cubs',
            'Cincinnati Reds',
            'Cleveland Indians',
            'Detroit Tigers',
            'Kansas City Royals',
            'Los Angeles Angels',
        ];

        return [
            'name' => fake()->randomElement($names),
        ];
    }
}
