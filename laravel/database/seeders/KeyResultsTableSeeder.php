<?php

namespace Database\Seeders;

use App\Models\KeyResult;
use Illuminate\Database\Seeder;

class KeyResultsTableSeeder extends Seeder
{
    public function run()
    {
        KeyResult::factory()->count(5)->create();
    }
}
