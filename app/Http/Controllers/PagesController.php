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

    // Google Maps Page
    public function map()
    {
        return view('layouts.map');
    }
}
