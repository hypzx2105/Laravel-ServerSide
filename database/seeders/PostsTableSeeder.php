<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Exploring the Panama Canal',
                'slug' => Str::slug('Exploring the Panama Canal'),
                'description' => 'Discover the engineering marvel of the Panama Canal and its history.',
                'image_path' => 'canal.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Hidden Gems of San Blas',
                'slug' => Str::slug('Hidden Gems of San Blas'),
                'description' => 'Perfect for adventure seekers, San Blas offers clear waters and untouched islands.',
                'image_path' => 'sanblas.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'A Guide to Bocas del Toro',
                'slug' => Str::slug('A Guide to Bocas del Toro'),
                'description' => 'Enjoy the vibrant culture, stunning beaches, and great surfing spots.',
                'image_path' => 'bocas.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
