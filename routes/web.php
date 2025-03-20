<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file defines the routes for your Laravel application.
|
*/

// Homepage Route
Route::get('/', [PagesController::class, 'home'])->name('home');

// Blog Routes
Route::get('/blog', [PostsController::class, 'index'])->name('blog.index'); // Show all posts
Route::get('/blog/{slug}', [PostsController::class, 'show'])->name('blog.show'); // Show a single post

// Destinations Page
Route::get('/destinations', [PagesController::class, 'destinations'])->name('destinations');

// Contact Page
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

// Google Maps Page
Route::get('/map', [PagesController::class, 'map'])->name('map');

