<?php

namespace Database\Factories;

use App\Models\LevOrder;
use App\Models\LevOrderState;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class LevOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' =>$this->faker->date
        ];
    }
}
