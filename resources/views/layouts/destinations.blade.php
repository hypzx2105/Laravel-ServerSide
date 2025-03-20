@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
<div class="relative w-full h-[400px]">
    <img src="{{ asset('images/panama2.jpg') }}" class="w-full h-full object-cover" alt="Destinations in Panama">
    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <h1 class="text-white text-5xl font-bold shadow-lg">Explore Panama</h1>
    </div>
</div>

{{-- Destinations List --}}
<section class="max-w-6xl mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-center text-gray-900 mb-6">Must-Visit Destinations</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        {{-- Destination 1 --}}
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="{{ asset('images/panama_canal.jpg') }}" class="w-full h-48 object-cover">
            <div class="p-5">
                <h3 class="text-xl font-bold">Panama Canal</h3>
                <p class="text-gray-600">A marvel of modern engineering connecting the Atlantic and Pacific Oceans.</p>
                <a href="https://goo.gl/maps/xyz" target="_blank" class="text-red-600 font-semibold mt-2 inline-block hover:underline">View on Google Maps →</a>
            </div>
        </div>

        {{-- Destination 2 --}}
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="{{ asset('images/san_blas.jpg') }}" class="w-full h-48 object-cover">
            <div class="p-5">
                <h3 class="text-xl font-bold">San Blas Islands</h3>
                <p class="text-gray-600">Crystal-clear waters and breathtaking Caribbean paradise.</p>
                <a href="https://goo.gl/maps/xyz" target="_blank" class="text-red-600 font-semibold mt-2 inline-block hover:underline">View on Google Maps →</a>
            </div>
        </div>

        {{-- Destination 3 --}}
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="{{ asset('images/bocas_del_toro.jpg') }}" class="w-full h-48 object-cover">
            <div class="p-5">
                <h3 class="text-xl font-bold">Bocas del Toro</h3>
                <p class="text-gray-600">Vibrant culture, stunning beaches, and great surfing spots.</p>
                <a href="https://goo.gl/maps/xyz" target="_blank" class="text-red-600 font-semibold mt-2 inline-block hover:underline">View on Google Maps →</a>
            </div>
        </div>

    </div>
</section>

@endsection
