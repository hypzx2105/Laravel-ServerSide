@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
<div class="relative w-full h-[500px]">
    <img src="{{ asset('images/panama1.jpg') }}" class="w-full h-full object-cover" alt="Panama City">
    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <h1 class="text-white text-5xl font-bold shadow-lg">Discover Panama</h1>
    </div>
</div>

{{-- Destinations Section --}}
<section class="max-w-6xl mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-center text-gray-900 mb-6">Top Destinations</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        {{-- Destination 1 --}}
        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition">
            <h3 class="text-xl font-bold text-gray-800">Panama Canal</h3>
            <p class="text-gray-600">One of the most iconic engineering wonders of the world.</p>
        </div>

        {{-- Destination 2 --}}
        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition">
            <h3 class="text-xl font-bold text-gray-800">San Blas Islands</h3>
            <p class="text-gray-600">Crystal clear waters and breathtaking islands.</p>
        </div>

        {{-- Destination 3 --}}
        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition">
            <h3 class="text-xl font-bold text-gray-800">Bocas del Toro</h3>
            <p class="text-gray-600">Enjoy paradise beaches and vibrant culture.</p>
        </div>

    </div>
</section>

{{-- Blog Section --}}
<section class="bg-gray-100 py-12">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-6">Latest Blog Posts</h2>
        
        @if($posts->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('images/' . $post->image_path) }}" class="w-full h-48 object-cover" alt="{{ $post->title }}">
                    <div class="p-5">
                        <h3 class="text-xl font-bold">{{ $post->title }}</h3>
                        <p class="text-gray-600">{{ Str::limit($post->description, 100) }}</p>
                        <a href="{{ route('blog.show', $post->id) }}" class="text-red-600 font-semibold mt-2 inline-block hover:underline">Read More →</a>
                    </div>
                </div>
            @endforeach
        </div>
        @else
            <p class="text-center text-gray-600">No blog posts available yet.</p>
        @endif
    </div>
</section>

@endsection
