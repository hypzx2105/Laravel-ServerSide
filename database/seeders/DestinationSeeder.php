<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DestinationSeeder extends Seeder
{
    public function run()
    {
        DB::table('destinations')->insert([
            [
                'title' => 'Panama Canal',
                'slug' => Str::slug('Panama Canal'),
                'description' => 'A marvel of engineering connecting the Atlantic and Pacific Oceans.',
                'image_path' => 'canal.jpg',
                'latitude' => 9.1012,
                'longitude' => -79.6958,
                'google_maps_url' => 'https://www.google.com/maps/place/Panama+Canal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'San Blas Islands',
                'slug' => Str::slug('San Blas Islands'),
                'description' => 'Crystal-clear waters and breathtaking Caribbean paradise.',
                'image_path' => 'sanblas.jpg',
                'latitude' => 9.5775,
                'longitude' => -78.8282,
                'google_maps_url' => 'https://www.google.com/maps/place/San+Blas+Islands',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Bocas del Toro',
                'slug' => Str::slug('Bocas del Toro'),
                'description' => 'Vibrant culture, stunning beaches, and great surfing spots.',
                'image_path' => 'bocas.jpg',
                'latitude' => 9.3406,
                'longitude' => -82.2432,
                'google_maps_url' => 'https://www.google.com/maps/place/Bocas+del+Toro',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
        
    }
}
