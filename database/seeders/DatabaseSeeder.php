<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;
use Database\Seeders\GiftsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->has(Profile::factory()->count(1))->create();
        // $this->call([GiftsTableSeeder::class]);
        \App\Models\Gift::factory(15)->create();
    }
}
