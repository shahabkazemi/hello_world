<?php

namespace Database\Factories;

use Hatamiarash7\PFaker\PFaker;
use Illuminate\Database\Eloquent\Factories\Factory;

class GiftFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $pFaker = new PFaker();
        return ['Title'=>$pFaker->fullName(), 'Description' => $pFaker->paragraph()];
        // return ['Title' => 'hello', 'Description' => 'asdfasdfasdfasdf'];
    }
}
