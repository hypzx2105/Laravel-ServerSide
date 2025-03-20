@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-center mb-8">Add a New Tourism Destination</h1>

    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto bg-white p-6 shadow-lg rounded">
        @csrf
        <div class="mb-4">
            <label class="block font-bold">Title:</label>
            <input type="text" name="title" class="w-full p-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-bold">Description:</label>
            <textarea name="description" class="w-full p-2 border rounded" rows="4" required></textarea>
        </div>

        <div class="mb-4">
            <label class="block font-bold">Upload Image:</label>
            <input type="file" name="image" class="w-full p-2 border rounded" required>
        </div>

        <button type="submit" class="w-full bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Add Destination</button>
    </form>
</div>
@endsection
