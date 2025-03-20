@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-center mb-8">Edit Tourism Destination</h1>

    <form action="{{ route('blog.update', $post->slug) }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto bg-white p-6 shadow-lg rounded">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-bold">Title:</label>
            <input type="text" name="title" value="{{ $post->title }}" class="w-full p-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-bold">Description:</label>
            <textarea name="description" class="w-full p-2 border rounded" rows="4" required>{{ $post->description }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-bold">Current Image:</label>
            <img src="{{ asset('images/' . $post->image_path) }}" class="w-full h-48 object-cover mb-4" alt="{{ $post->title }}">
        </div>

        <div class="mb-4">
            <label class="block font-bold">Upload New Image (Optional):</label>
            <input type="file" name="image" class="w-full p-2 border rounded">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Destination</button>
    </form>
</div>
@endsection
