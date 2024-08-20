<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CheckIn;

class CheckInsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CheckIn::factory()->count(5)->create();
    }
}
