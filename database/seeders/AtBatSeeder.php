<?php

namespace Database\Seeders;

use App\Models\AtBat;
use Illuminate\Database\Seeder;

class AtBatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AtBat::factory()->count(1000)->create();
    }
}
