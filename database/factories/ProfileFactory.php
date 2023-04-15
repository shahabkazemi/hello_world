<?php

namespace Database\Factories;

use Hatamiarash7\PFaker\PFaker;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $f = new PFaker();
        return [
            'mobile' => $f->mobile(), 'telephone' => $f->telephone(), 'birthday' => $f->birthday(), 'age' => $f->age(),
            'state' => $f->state(), 'city' => $f->city()
        ];
    }
}
