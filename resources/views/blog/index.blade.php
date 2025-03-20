@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-center text-gray-900 mb-6">Blog</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($posts as $post)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('images/' . $post->image_path) }}" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold">{{ $post->title }}</h3>
                    <p class="text-gray-600">{{ Str::limit($post->description, 100) }}</p>
                    <a href="{{ route('blog.show', $post->id) }}" class="text-red-600 mt-2 inline-block">Read More →</a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $posts->links() }}
    </div>
</div>
@endsection
