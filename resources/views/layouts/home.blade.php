@extends('layouts.app')

@section('content')

{{-- Hero Video --}}
<div class="relative w-full h-screen">
    <video autoplay loop muted playsinline class="absolute w-full h-full object-cover">
        <source src="{{ asset('videos/panama.mp4') }}" type="video/mp4">
    </video>
    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40">
        <h1 class="text-white text-5xl font-bold">Discover Panamá</h1>
    </div>
</div>

{{-- Best Rated Places --}}
<section class="max-w-6xl mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-center text-gray-900 mb-6">Best Rated Places</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach($topDestinations as $destination)
            <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-xl transition">
                <img src="{{ asset('images/' . $destination->image_path) }}" class="w-full h-48 object-cover" alt="{{ $destination->title }}">
                <div class="p-5">
                    <h3 class="text-xl font-bold">{{ $destination->title }}</h3>
                    <p class="text-gray-600">{{ $destination->description }}</p>

                    {{-- Visit Button --}}
                    <a href="{{ route('destinations.show', $destination->slug) }}" class="block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 mt-4 rounded text-center">
                        Visit
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>

{{-- Blog Section --}}
<section class="bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-900 mb-6">Latest Blog Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('images/' . $post->image_path) }}" class="w-full h-48 object-cover" alt="{{ $post->title }}">
                    <div class="p-5">
                        <h3 class="text-xl font-bold">{{ $post->title }}</h3>
                        <a href="{{ route('blog.show', $post->id) }}" class="text-red-600 font-semibold mt-2 inline-block hover:underline">Read More →</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
