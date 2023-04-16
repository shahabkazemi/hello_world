<?php

namespace Database\Factories;

use Hatamiarash7\PFaker\PFaker;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
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
            'Title' => $f->sentence()
        ];
    }
}
