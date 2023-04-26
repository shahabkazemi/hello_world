<?php

namespace Database\Factories;

use Hatamiarash7\PFaker\PFaker;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $pf = new PFaker();
        return [
            'name' => $pf->lastName(),
            'user_id' => rand(1,20)
        ];
    }

    public function carinfo(){
        return $this->hasOneThrough(CarInfo::class, Car::class);
    }
}
