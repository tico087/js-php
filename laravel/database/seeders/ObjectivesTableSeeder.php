<?php

namespace Database\Seeders;

use App\Models\Objective;
use Illuminate\Database\Seeder;

class ObjectivesTableSeeder extends Seeder
{
    public function run()
    {
        Objective::factory()->count(5)->create();
    }
}
