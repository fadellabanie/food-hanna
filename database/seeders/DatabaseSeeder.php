<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        \App\Models\News::factory(20)->create();
        \App\Models\Team::factory(10)->create();
        \App\Models\Client::factory(10)->create();
    }
}
