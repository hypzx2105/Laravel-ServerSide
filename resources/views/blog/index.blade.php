@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-center mb-8">Explore Tourism Destinations in Panama</h1>
    
    @if(session()->has('message'))
        <div class="bg-green-500 text-white p-3 mb-4 rounded">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($posts as $post)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('images/' . $post->image_path) }}" class="w-full h-64 object-cover" alt="{{ $post->title }}">
                <div class="p-4">
                    <h2 class="text-xl font-bold">{{ $post->title }}</h2>
                    <p class="text-gray-700 mt-2">{{ Str::limit($post->description, 100) }}</p>
                    <a href="{{ route('blog.show', $post->slug) }}" class="inline-block mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">View Details</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
