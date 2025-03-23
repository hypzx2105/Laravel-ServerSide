@extends('layouts.app')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-center text-gray-900 mb-6">Your Favorite Places</h2>

    @if($favorites->isEmpty())
        <p class="text-center text-gray-600">No favorites yet.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($favorites as $destination)
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-xl transition destination-card" data-id="{{ $destination->id }}">
                    <img src="{{ asset('images/' . $destination->image_path) }}" class="w-full h-48 object-cover" alt="{{ $destination->title }}">
                    <div class="p-5">
                        <h3 class="text-xl font-bold">{{ $destination->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ $destination->description }}</p>

                        {{-- Learn More --}}
                        <a href="{{ route('destinations.show', $destination->slug) }}" class="text-red-600 font-semibold">Learn More →</a>

                        {{-- Remove from Favorites (now handled by JS) --}}
                        <button onclick="toggleFavorite({{ $destination->id }})"
                            class="bg-red-500 hover:bg-red-600 text-white text-sm px-4 py-2 rounded mt-3">
                            Remove from Favorites
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</section>

{{-- AJAX Script for Instant Updates --}}
<script>
    function toggleFavorite(destinationId) {
        fetch("{{ route('favorites.toggle') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ destination_id: destinationId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "removed") {
                document.querySelector(`[data-id='${destinationId}']`).remove(); // Remove from UI instantly
            } else {
                alert("Error removing from favorites.");
            }
        })
        .catch(error => console.error("Error:", error));
    }
</script>
@endsection
