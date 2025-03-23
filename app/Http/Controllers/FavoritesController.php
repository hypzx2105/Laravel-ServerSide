<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class FavoritesController extends Controller
{
    
    public function toggleFavorite(Request $request)
{
    $destinationId = intval($request->destination_id);
    $favorites = session('favorites', []);

    if (in_array($destinationId, $favorites)) {
        // Remove
        $favorites = array_values(array_diff($favorites, [$destinationId]));
        session(['favorites' => $favorites]);

        return response()->json(['status' => 'removed']);
    } else {
        // Add
        $favorites[] = $destinationId;
        session(['favorites' => array_unique($favorites)]);

        return response()->json(['status' => 'added']);
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
