<?php

namespace Database\Seeders;

use App\Models\CarInfo;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\Car::factory(10)->create();
        \App\Models\CarInfo::factory(10)->create();
    }
}
