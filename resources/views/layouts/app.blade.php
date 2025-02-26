<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Panama</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="text-gray-900 relative">

    <!-- Navbar -->
    <nav>
        <div class="container">
            <h1>Tourism Panama</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Destinations</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Slider Section -->
    <div class="slider-container">
        <div id="imageSlider" class="slider"></div>
        <button id="prevBtn" class="slider-btn left">&lt;</button>
        <button id="nextBtn" class="slider-btn right">&gt;</button>
    </div>

    <!-- Hero Section -->
    <div class="hero-text">
        <h1>Discover Panama</h1>
    </div>

    <!-- Content -->
    <div class="relative z-10 p-10">
        @yield('content')
    </div>

</body>
</html>
