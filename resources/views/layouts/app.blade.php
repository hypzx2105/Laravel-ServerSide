<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Panama</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    
    {{-- Navbar --}}
    <nav class="bg-white shadow-md fixed w-full top-0 left-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="text-2xl font-bold text-red-600">
                    <a href="{{ route('home') }}">Tourism Panama</a>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="{{ route('home') }}" class="hover:text-red-600">Home</a>
                    <a href="{{ route('destinations') }}" class="hover:text-red-600">Destinations</a>
                    <a href="{{ route('blog.index') }}" class="hover:text-red-600">Blog</a>
                    <a href="{{ route('contact') }}" class="hover:text-red-600">Contact</a>
                    <a href="{{ route('map') }}" class="hover:text-red-600">Map</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Page Content --}}
    <div class="mt-20">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-white mt-12 py-6">
        <div class="text-center text-sm">
            &copy; {{ date('Y') }} Tourism Panama. All rights reserved.
        </div>
    </footer>

</body>
</html>
