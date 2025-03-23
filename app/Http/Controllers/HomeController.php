<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Show the application homepage with top destinations & latest posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch Top 3 Rated Destinations
        $topDestinations = Destination::orderBy('rating', 'desc')->take(3)->get();

        // Fetch the Latest 6 Blog Posts
        $posts = Post::latest()->take(6)->get();

        // Pass data to the view
        return view('layouts.home', compact('topDestinations', 'posts'));
    }
}
