<?php

namespace Database\Factories;

use App\Models\CheckIn;
use App\Models\KeyResult;
use Illuminate\Database\Eloquent\Factories\Factory;

class CheckInFactory extends Factory
{
    protected $model = CheckIn::class;

    public function definition()
    {
        return [
            'key_result_id' => KeyResult::factory(),
            'check_in_date' => $this->faker->date(),
            'current_value' => $this->faker->randomFloat(2, 0, 100),
            'description' => $this->faker->sentence(),
        ];
    }
}
