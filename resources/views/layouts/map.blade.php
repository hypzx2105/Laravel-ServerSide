@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-center text-gray-900 mb-6">Tourism Map</h1>

    {{-- Google Map --}}
    <div id="map" class="w-full h-96 rounded-lg shadow-md"></div>

    {{-- Destination List --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        @foreach($locations as $location)
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-800">{{ $location['title'] }}</h3>
                <a href="{{ $location['url'] }}" target="_blank" class="text-red-600">View on Google Maps →</a>
            </div>
        @endforeach
    </div>
</div>

<script>
    function initMap() {
        var locations = @json($locations);

        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 7,
            center: locations[0]
        });

        locations.forEach(function(location) {
            var marker = new google.maps.Marker({
                position: { lat: location.lat, lng: location.lng },
                map: map,
                title: location.title
            });

            marker.addListener("click", function() {
                window.open(location.url, "_blank");
            });
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap" async defer></script>

@endsection
