<?php

namespace Database\Seeders;

use App\Models\Opponent;
use Illuminate\Database\Seeder;

class OpponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Opponent::factory()->count(14)->create();
    }
}
