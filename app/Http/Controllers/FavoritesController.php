<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class FavoritesController extends Controller
{
    
    public function toggleFavorite(Request $request)
{
    $destinationId = $request->destination_id;
    $user = auth()->user();

    
    $favorite = $user->favorites()->where('destination_id', $destinationId)->first();

    if ($favorite) {
        $favorite->delete(); 
        return response()->json(['status' => 'removed']);
    } else {
        return response()->json(['status' => 'error']);
    }
}



public function showFavorites()
{
    $favoriteIds = session('favorites', []);
    $favorites = Destination::whereIn('id', $favoriteIds)->get();

    return view('favorites', compact('favorites')); 
}

public function remove(Request $request)
{
    $destinationId = intval($request->input('destination_id'));
    $favorites = session('favorites', []);

    
    $favorites = array_values(array_diff($favorites, [$destinationId]));

    session(['favorites' => $favorites]);

    return redirect()->back()->with('success', 'Removed from favorites.');
}



}
