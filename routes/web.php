<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FavoritesController;

// ========================
//  HOMEPAGE
// ========================
Route::get('/', [HomeController::class, 'index'])->name('home');  // ✅ Keep only this one

// ========================
//  BLOG ROUTES
// ========================
Route::get('/blog', [PostsController::class, 'index'])->name('blog.index'); // Show all posts
Route::get('/blog/{slug}', [PostsController::class, 'show'])->name('blog.show'); // Show single post

// ========================
//  DESTINATIONS
// ========================
Route::get('/destinations', [DestinationController::class, 'index'])->name('destinations.index'); // ✅ Keep only this one
Route::get('/destinations/{slug}', [DestinationController::class, 'show'])->name('destinations.show'); // Show a single destination

// ========================
//  CONTACT & MAP PAGES
// ========================
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/map', [PagesController::class, 'map'])->name('map');

// ========================
//  FAVORITES ROUTES
// ========================
Route::post('/toggle-favorite', [FavoritesController::class, 'toggleFavorite'])->name('toggle.favorite');
Route::get('/favorites', [FavoritesController::class, 'showFavorites'])->name('favorites.index');
Route::post('/favorites/remove', [FavoritesController::class, 'remove'])->name('favorites.remove');

