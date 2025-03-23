@extends('layouts.app')

@section('title', 'What You Need to Know - Tourism Panama')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center text-gray-900 mb-6">What You Need to Know</h1>

    {{-- Hero Image --}}
    <div class="mb-8">
        <img src="{{ asset('images/panama2.jpg') }}" alt="Panama City Overview" class="w-full h-72 object-cover rounded shadow-lg">
    </div>

    {{-- Intro --}}
    <div class="mb-10 text-lg text-gray-700">
        <p>Welcome to Panama — a vibrant country where modern cities meet tropical rainforests and beautiful beaches. Before exploring all its wonders, here’s some essential information to help you stay safe and prepared during your trip.</p>
    </div>

    {{-- Emergency Numbers --}}
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Emergency Contacts</h2>
        <ul class="list-disc pl-6 text-gray-700">
            <li><strong>National Police:</strong> 104</li>
            <li><strong>Medical Emergency (Ambulance):</strong> 911</li>
            <li><strong>Fire Department:</strong> 103</li>
            <li><strong>Tourist Assistance Hotline:</strong> +507 504-9111</li>
            <li><strong>COVID-19 Hotline:</strong> 169</li>
        </ul>
    </div>

    {{-- Hospitals --}}
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Recommended Hospitals & Clinics</h2>
        <ul class="list-disc pl-6 text-gray-700">
            <li><strong>Hospital Punta Pacífica</strong> – One of the top private hospitals in Panama City. Tel: +507 204-8000</li>
            <li><strong>Hospital Nacional</strong> – Centrally located with bilingual staff. Tel: +507 207-8100</li>
            <li><strong>Hospital Santo Tomás</strong> – Public hospital serving emergencies. Tel: +507 524-6000</li>
        </ul>
    </div>

    {{-- Embassies --}}
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Embassies & Consulates</h2>
        <ul class="list-disc pl-6 text-gray-700">
            <li><strong>U.S. Embassy:</strong> +507 317-5000</li>
            <li><strong>Canadian Embassy:</strong> +507 263-3612</li>
            <li><strong>Spanish Embassy:</strong> +507 264-2414</li>
            <li><strong>British Embassy:</strong> +507 297-6550</li>
        </ul>
    </div>

    {{-- Additional Tips --}}
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Travel Tips</h2>
        <ul class="list-disc pl-6 text-gray-700">
            <li>Always carry a copy of your passport with you.</li>
            <li>U.S. Dollars are widely used and accepted throughout Panama.</li>
            <li>Use bottled water if you're traveling outside major cities.</li>
            <li>Respect nature: some places have protected wildlife and vegetation.</li>
        </ul>
    </div>

    {{-- Contact Line --}}
    <div class="text-center text-gray-700">
        <p>Still have questions? Reach us at <strong>info@tourismpanama.com</strong></p>
    </div>
</div>
@endsection
