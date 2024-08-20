<?php

namespace Database\Factories;

use App\Models\Objective;
use Illuminate\Database\Eloquent\Factories\Factory;

class ObjectiveFactory extends Factory
{
    protected $model = Objective::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'progress' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}

