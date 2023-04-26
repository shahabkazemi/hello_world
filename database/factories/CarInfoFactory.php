<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'color' => $this->faker->colorName(),
            'car_id' => rand(1,10)
        ];
    }
}
