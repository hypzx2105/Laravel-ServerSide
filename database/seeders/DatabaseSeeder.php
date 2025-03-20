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
        // Ensure the PostsTableSeeder is recognized
        $this->call([
            PostsTableSeeder::class,
        ]);
    }
}
