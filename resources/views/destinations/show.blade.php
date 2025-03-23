@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-gray-900">{{ $destination->title }}</h1>
    <p class="text-gray-700 mt-4">{{ $destination->description }}</p>

    {{-- Google Map --}}
    <div id="map" class="w-full h-96 mt-6"></div>
</div>

<script>
    function initMap() {
        var location = { lat: {{ $destination->latitude }}, lng: {{ $destination->longitude }} };

        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: location
        });

        new google.maps.Marker({
            position: location,
            map: map,
            title: "{{ $destination->title }}"
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap" async defer></script>

@endsection
