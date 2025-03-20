<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Import Post model

class PagesController extends Controller
{
    // Home Page - Now includes latest posts
    public function home()
    {
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get(); // Fetch 3 latest posts
        return view('layouts.home', compact('posts'));
    }

    // Destinations Page
    public function destinations()
    {
        return view('layouts.destinations');
    }

    // Contact Page
    public function contact()
    {
        return view('layouts.contact');
    }

    // Google Maps Page - Now properly passes locations
    public function map()
    {
        $locations = [
            ['lat' => 9.1012, 'lng' => -79.6958, 'title' => 'Panama Canal', 'url' => 'https://goo.gl/maps/qv5FmE'],
            ['lat' => 9.5775, 'lng' => -78.8282, 'title' => 'San Blas Islands', 'url' => 'https://goo.gl/maps/VvW1cY'],
            ['lat' => 9.3406, 'lng' => -82.2432, 'title' => 'Bocas del Toro', 'url' => 'https://goo.gl/maps/yZG8pH']
        ];

        return view('layouts.map', compact('locations'));
    }
}
