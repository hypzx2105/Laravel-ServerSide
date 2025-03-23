@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-center text-gray-900 mb-6">Blog</h1>

    {{-- Flash message --}}
    @if (session('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 text-center">
            {{ session('message') }}
        </div>
    @endif

    {{-- Add new post button --}}
    <div class="text-center mb-6">
        <a href="{{ route('blog.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
            + Add New Post
        </a>
    </div>

    {{-- Posts Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($posts as $post)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('images/' . $post->image_path) }}" class="w-full h-40 object-cover" alt="{{ $post->title }}">
                <div class="p-4">
                    <h3 class="text-xl font-bold">{{ $post->title }}</h3>
                    <p class="text-gray-600">{{ Str::limit($post->description, 100) }}</p>
                    <a href="{{ route('blog.show', $post->slug) }}" class="text-red-600 mt-2 inline-block hover:underline">Read More →</a>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="mt-6">
        {{ $posts->links() }}
    </div>
</div>
@endsection
