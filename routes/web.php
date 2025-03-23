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
Route::get('/', [HomeController::class, 'index'])->name('home');  

// BLOG ROUTES
Route::get('/blog', [PostsController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [PostsController::class, 'create'])->name('blog.create');
Route::post('/blog', [PostsController::class, 'store'])->name('blog.store');
Route::get('/blog/{slug}', [PostsController::class, 'show'])->name('blog.show');
Route::get('/blog/{slug}/edit', [PostsController::class, 'edit'])->name('blog.edit');
Route::put('/blog/{slug}', [PostsController::class, 'update'])->name('blog.update');
Route::delete('/blog/{slug}', [PostsController::class, 'destroy'])->name('blog.destroy');


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


Route::post('/favorites/toggle', [FavoritesController::class, 'toggleFavorite'])->name('favorites.toggle');
Route::get('/favorites', [FavoritesController::class, 'showFavorites'])->name('favorites.index');
Route::post('/favorites/remove', [FavoritesController::class, 'remove'])->name('favorites.remove');

