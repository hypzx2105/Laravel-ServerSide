@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-center text-gray-900 mb-6">Tourism Map</h1>

    {{-- Google Map --}}
    <div id="map" class="w-full h-96"></div>

    {{-- Destination List --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-xl font-bold text-gray-800">Panama Canal</h3>
            <a href="https://goo.gl/maps/example1" class="text-red-600">View on Google Maps →</a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-xl font-bold text-gray-800">San Blas Islands</h3>
            <a href="https://goo.gl/maps/example2" class="text-red-600">View on Google Maps →</a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-xl font-bold text-gray-800">Bocas del Toro</h3>
            <a href="https://goo.gl/maps/example3" class="text-red-600">View on Google Maps →</a>
        </div>
    </div>

</div>

<script>
    function initMap() {
        var locations = [
            { lat: 9.1012, lng: -79.6958, title: "Panama Canal", url: "https://goo.gl/maps/example1" },
            { lat: 9.5775, lng: -78.8282, title: "San Blas Islands", url: "https://goo.gl/maps/example2" },
            { lat: 9.3406, lng: -82.2432, title: "Bocas del Toro", url: "https://goo.gl/maps/example3" }
        ];

        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 7,
            center: locations[0]
        });

        locations.forEach(function(location) {
            var marker = new google.maps.Marker({
                position: location,
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
