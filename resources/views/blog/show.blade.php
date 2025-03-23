@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        
        {{-- Image --}}
        <img src="{{ asset('images/' . $post->image_path) }}" class="w-full h-96 object-cover" alt="{{ $post->title }}">

        <div class="p-6">
            {{-- Title --}}
            <h1 class="text-3xl font-bold">{{ $post->title }}</h1>

            {{-- Description --}}
            <p class="text-gray-700 mt-4">{{ $post->description }}</p>

            {{-- Google Maps (if available) --}}
            @if ($post->google_maps_url)
                <div class="mt-8">
                    <h2 class="text-xl font-semibold mb-2">Location</h2>
                    <iframe 
                        src="{{ $post->google_maps_url }}" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen 
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            @endif

            {{-- Actions --}}
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="{{ route('blog.edit', $post->slug) }}" 
                   class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                    Edit
                </a>

                <form action="{{ route('blog.destroy', $post->slug) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?')" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                        Delete
                    </button>
                </form>

                <a href="{{ route('blog.index') }}" 
                   class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Back to Blog
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
