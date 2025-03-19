<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Home Page
    public function home()
    {
        return view('layouts.home');
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
