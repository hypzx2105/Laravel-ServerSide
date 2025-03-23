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
        $destinations = [
            [
                'title' => 'Panama Canal',
                'description' => 'The Panama Canal is one of the greatest feats of modern engineering. Stretching over 80 kilometers, it connects the Atlantic and Pacific Oceans and is a major route for international maritime trade. The locks system raises and lowers ships across the Isthmus of Panama.',
                'image_path' => 'canal.jpg',
                'latitude' => 9.1012,
                'longitude' => -79.6958,
                'google_maps_url' => 'https://www.google.com/maps/place/Panama+Canal',
            ],
            [
                'title' => 'San Blas Islands',
                'description' => 'The San Blas Islands are a group of over 360 islands along the Caribbean coast of Panama. Known for white beaches and turquoise waters, they offer a pristine escape and cultural experience with the indigenous Guna people.',
                'image_path' => 'sanblas.jpg',
                'latitude' => 9.5775,
                'longitude' => -78.8282,
                'google_maps_url' => 'https://www.google.com/maps/place/San+Blas+Islands',
            ],
            [
                'title' => 'Bocas del Toro',
                'description' => 'Bocas del Toro offers stunning beaches, coral reefs, vibrant nightlife, and Afro-Caribbean culture. Ideal for surfers, snorkelers, and eco-tourism seekers.',
                'image_path' => 'bocas.jpg',
                'latitude' => 9.3406,
                'longitude' => -82.2432,
                'google_maps_url' => 'https://www.google.com/maps/place/Bocas+del+Toro',
            ],
            [
                'title' => 'Boquete',
                'description' => 'Located in the Chiriquí Highlands, Boquete is known for its cool climate, coffee farms, hiking trails, and the scenic Baru Volcano.',
                'image_path' => 'boquete.jpg',
                'latitude' => 8.7802,
                'longitude' => -82.4412,
                'google_maps_url' => 'https://www.google.com/maps/place/Boquete',
            ],
            [
                'title' => 'Casco Viejo',
                'description' => 'Casco Viejo is the historic district of Panama City. It features colonial-era architecture, charming plazas, and vibrant cafés and restaurants.',
                'image_path' => 'casco.jpg',
                'latitude' => 8.9528,
                'longitude' => -79.5350,
                'google_maps_url' => 'https://www.google.com/maps/place/Casco+Viejo',
            ],
            [
                'title' => 'Pearl Islands',
                'description' => 'An archipelago in the Gulf of Panama known for its luxurious resorts, clear waters, and whale watching experiences.',
                'image_path' => 'perla.jpg',
                'latitude' => 8.4000,
                'longitude' => -78.9000,
                'google_maps_url' => 'https://www.google.com/maps/place/Pearl+Islands',
            ],
            [
                'title' => 'Taboga Island',
                'description' => 'Also known as the Island of Flowers, Taboga offers beaches, small village charm, and views of the Panama City skyline.',
                'image_path' => 'taboga.jpg',
                'latitude' => 8.7833,
                'longitude' => -79.5667,
                'google_maps_url' => 'https://www.google.com/maps/place/Taboga+Island',
            ],
            [
                'title' => 'El Valle de Antón',
                'description' => 'A town nestled in a volcanic crater, known for hot springs, waterfalls, and the famous Sunday artisan market.',
                'image_path' => 'valle.jpg',
                'latitude' => 8.6000,
                'longitude' => -80.1333,
                'google_maps_url' => 'https://www.google.com/maps/place/El+Valle+de+Anton',
            ],
            [
                'title' => 'Coiba National Park',
                'description' => 'A UNESCO World Heritage Site and one of the top diving spots in the world, offering rich biodiversity and marine life.',
                'image_path' => 'coiba.jpg',
                'latitude' => 7.4500,
                'longitude' => -81.8000,
                'google_maps_url' => 'https://www.google.com/maps/place/Coiba+National+Park',
            ],
            [
                'title' => 'Santa Catalina',
                'description' => 'A laid-back beach town, popular among surfers and divers heading to Coiba Island.',
                'image_path' => 'ST.jpg',
                'latitude' => 7.6333,
                'longitude' => -81.2667,
                'google_maps_url' => 'https://www.google.com/maps/place/Santa+Catalina',
            ],
            [
                'title' => 'Panama City',
                'description' => 'The capital of Panama, featuring a skyline of skyscrapers, a vibrant nightlife, and historic areas like Casco Viejo.',
                'image_path' => 'city.jpg',
                'latitude' => 8.9824,
                'longitude' => -79.5199,
                'google_maps_url' => 'https://www.google.com/maps/place/Panama+City',
            ],
            [
                'title' => 'Metropolitan Natural Park',
                'description' => 'An urban jungle in the heart of Panama City offering hiking trails and wildlife watching.',
                'image_path' => 'MP.jpg',
                'latitude' => 8.9943,
                'longitude' => -79.5413,
                'google_maps_url' => 'https://www.google.com/maps/place/Parque+Natural+Metropolitano',
            ],
            [
                'title' => 'Ancon Hill',
                'description' => 'A natural viewpoint offering panoramic views of Panama City and the Canal, often visited for hikes.',
                'image_path' => 'Ancon.jpg',
                'latitude' => 8.9650,
                'longitude' => -79.5403,
                'google_maps_url' => 'https://www.google.com/maps/place/Ancon+Hill',
            ],
            [
                'title' => 'Portobelo',
                'description' => 'A historic Caribbean port with Spanish fort ruins and Afro-Caribbean traditions.',
                'image_path' => 'portobelo.jpg',
                'latitude' => 9.5533,
                'longitude' => -79.6550,
                'google_maps_url' => 'https://www.google.com/maps/place/Portobelo',
            ],
            [
                'title' => 'Isla Iguana',
                'description' => 'A wildlife refuge with coral reefs and colonies of marine birds located in the Azuero Peninsula.',
                'image_path' => 'iguana',
                'latitude' => 7.5000,
                'longitude' => -80.0000,
                'google_maps_url' => 'https://www.google.com/maps/place/Isla+Iguana',
            ],
            [
                'title' => 'Chagres National Park',
                'description' => 'Home to the Chagres River and Lake Alajuela, this park is crucial for the Panama Canal water supply.',
                'image_path' => 'panama1.jpg',
                'latitude' => 9.2000,
                'longitude' => -79.5000,
                'google_maps_url' => 'https://www.google.com/maps/place/Parque+Nacional+Chagres',
            ],
            [
                'title' => 'La Yeguada Forest Reserve',
                'description' => 'A scenic pine forest reserve in Veraguas, ideal for camping, hiking, and freshwater fishing.',
                'image_path' => 'panama2.jpg',
                'latitude' => 8.3000,
                'longitude' => -80.9000,
                'google_maps_url' => 'https://www.google.com/maps/place/La+Yeguada',
            ],
            [
                'title' => 'Volcán Barú',
                'description' => 'Panama’s highest point at 3,475 meters, where hikers can witness both oceans at sunrise from the summit.',
                'image_path' => 'panama3.jpg',
                'latitude' => 8.8081,
                'longitude' => -82.5421,
                'google_maps_url' => 'https://www.google.com/maps/place/Volcan+Baru',
            ],
            [
                'title' => 'Las Lajas Beach',
                'description' => 'An endless stretch of golden sand beach in Chiriquí, popular for its gentle waves and sunsets.',
                'image_path' => 'panama1.jpg',
                'latitude' => 8.1833,
                'longitude' => -81.8667,
                'google_maps_url' => 'https://www.google.com/maps/place/Las+Lajas',
            ],
            [
                'title' => 'Gamboa Rainforest',
                'description' => 'A lush rainforest near the Panama Canal, famous for birdwatching and the aerial tram.',
                'image_path' => 'panama2.jpg',
                'latitude' => 9.1192,
                'longitude' => -79.7250,
                'google_maps_url' => 'https://www.google.com/maps/place/Gamboa+Rainforest',
            ],
        ];

        foreach ($destinations as $dest) {
            DB::table('destinations')->insert([
                'title' => $dest['title'],
                'slug' => Str::slug($dest['title']),
                'description' => $dest['description'],
                'image_path' => $dest['image_path'],
                'latitude' => $dest['latitude'],
                'longitude' => $dest['longitude'],
                'google_maps_url' => $dest['google_maps_url'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
