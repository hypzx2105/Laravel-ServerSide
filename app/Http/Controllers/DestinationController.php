<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination; // Ensure this model is imported

class DestinationController extends Controller
{
    public function index()
{
    $destinations = Destination::all();
    $favorites = session('favorites', []);
    return view('destinations.index', compact('destinations', 'favorites'));
}


    public function show($slug)
    {
        $destination = Destination::where('slug', $slug)->firstOrFail();
        return view('destinations.show', compact('destination'));
    }
}
