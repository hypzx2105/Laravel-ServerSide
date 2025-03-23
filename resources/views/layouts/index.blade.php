@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-center text-gray-900 mb-6">Must-Visit Destinations</h1>

    {{-- Search Input --}}
    <div class="flex justify-center mb-8">
        <input type="text" id="destinationSearch" placeholder="Search destinations..."
            class="px-4 py-2 border rounded-full w-64 shadow-md">
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($destinations as $destination)
            <div class="bg-white shadow-lg rounded-lg p-6">
                <img src="{{ asset('images/' . $destination->image_path) }}" class="w-full h-40 object-cover mb-2">
                <h3 class="text-xl font-bold text-gray-800">{{ $destination->title }}</h3>
                <p class="text-gray-600">{{ Str::limit($destination->description, 100) }}</p>
                <a href="{{ route('destinations.show', $destination->slug) }}" class="text-red-600 mt-2 inline-block">Learn More →</a>

                {{-- Visit Button --}}
                <a href="{{ route('destinations.show', $destination->slug) }}" class="block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 mt-4 rounded text-center">
                    Visit
                </a>
            </div>
        @endforeach
    </div>
</div>

{{-- JS Search --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const input = document.getElementById("destinationSearch");
        const cards = document.querySelectorAll(".destination-card");

        input.addEventListener("input", function () {
            const query = this.value.toLowerCase();
            cards.forEach(card => {
                const title = card.querySelector("h3").textContent.toLowerCase();
                card.style.display = title.includes(query) ? "block" : "none";
            });
        });
    });
</script>

@endsection
