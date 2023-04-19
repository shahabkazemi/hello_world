<?php

namespace Database\Factories;

use Hatamiarash7\PFaker\PFaker;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    private static $fake_roles = ['مدیر', 'نویسنده', 'توسعه دهنده', 'ورود اطلاعات', 'ویرایشگر'];
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $f = new PFaker();
        return [
            'Title' => $this->fake_roles[range(0, 4)]
        ];
    }
}
