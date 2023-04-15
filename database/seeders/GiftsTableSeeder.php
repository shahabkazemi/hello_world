<?php

namespace Database\Seeders;

use App\Models\Gift;
use Hatamiarash7\PFaker\PFaker;
use Illuminate\Database\Seeder;

class GiftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ini_set('memory_limit', '-1');

        // $faker = \Faker\Factory::create();
        // $fFaker = new PFaker();

        // foreach(range(1, 10) as $item)
        // {
        //     Gift::create(['Title'=>$fFaker->fullName(), 'Description' => $fFaker->paragraph()]);
        // }

        // \App\Models\Gift::factory(15);
    }
}
