@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="{{ asset('images/' . $post->image_path) }}" class="w-full h-96 object-cover" alt="{{ $post->title }}">
        <div class="p-6">
            <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
            <p class="text-gray-700 mt-4">{{ $post->description }}</p>

            <div class="mt-6">
                <a href="{{ route('blog.edit', $post->slug) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</a>
                
                <form action="{{ route('blog.destroy', $post->slug) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button>
                </form>
                
                <a href="{{ route('blog.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
