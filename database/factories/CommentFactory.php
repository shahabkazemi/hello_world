<?php

namespace Database\Factories;

use Hatamiarash7\PFaker\PFaker;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
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
            'body' => $f->paragraph()
        ];
    }
}
