<?php

namespace Database\Factories;

use App\Models\Opponent;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AtBat>
 */
class AtBatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'team_id' => Team::all()->random()->id,
            'opponent_id' => Opponent::all()->random()->id,
            'date' => fake()->date(),
            'pa' => fake()->numberBetween(0, 100),
            'ab' => fake()->numberBetween(0, 100),
            'avg' => fake()->randomFloat(3, 0, 1),
            'obp' => fake()->randomFloat(3, 0, 1),
            'ops' => fake()->randomFloat(3, 0, 1),
            'slg' => fake()->randomFloat(3, 0, 1),
            'h' => fake()->numberBetween(0, 100),
            'singles' => fake()->numberBetween(0, 100),
            'doubles' => fake()->numberBetween(0, 100),
            'triples' => fake()->numberBetween(0, 100),
            'hr' => fake()->numberBetween(0, 100),
            'rbi' => fake()->numberBetween(0, 100),
            'r' => fake()->numberBetween(0, 100),
            'bb' => fake()->numberBetween(0, 100),
            'so' => fake()->numberBetween(0, 100),
            'kl' => fake()->numberBetween(0, 100),
            'hbp' => fake()->numberBetween(0, 100),
            'sac' => fake()->numberBetween(0, 100),
            'sf' => fake()->numberBetween(0, 100),
            'roe' => fake()->numberBetween(0, 100),
            'fc' => fake()->numberBetween(0, 100),
            'sb' => fake()->numberBetween(0, 100),
            'sbp' => fake()->numberBetween(0, 100),
            'cs' => fake()->numberBetween(0, 100),
            'pik' => fake()->numberBetween(0, 100),
        ];
    }
}
