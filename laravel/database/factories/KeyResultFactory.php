<?php

namespace Database\Factories;

use App\Models\KeyResult;
use Illuminate\Database\Eloquent\Factories\Factory;

class KeyResultFactory extends Factory
{
    protected $model = KeyResult::class;

    public function definition()
    {
        return [
            'objective_id' => \App\Models\Objective::factory(),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'target_value' => $this->faker->randomFloat(2, 50, 200),
            'current_value' => $this->faker->randomFloat(2, 0, 50),
            'progress' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}

