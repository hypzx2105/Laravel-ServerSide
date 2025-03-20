@extends('layouts.app')

@section('content')

<div class="w-full h-screen flex items-center justify-center text-white text-center">
    <h1 class="text-5xl font-bold">Discover Panama</h1>
</div>

<div class="container mx-auto p-5 grid grid-cols-3 gap-4 relative z-10">
    <div class="card bg-white p-6 shadow-lg rounded-lg">
        <h3 class="text-xl font-bold">Panama Canal</h3>
        <p>One of the most iconic engineering wonders of the world.</p>
    </div>
    <div class="card bg-white p-6 shadow-lg rounded-lg">
        <h3 class="text-xl font-bold">San Blas Islands</h3>
        <p>Crystal clear waters and breathtaking islands.</p>
    </div>
    <div class="card bg-white p-6 shadow-lg rounded-lg">
        <h3 class="text-xl font-bold">Bocas del Toro</h3>
        <p>Enjoy paradise beaches and vibrant culture.</p>
    </div>
</div>

@endsection
