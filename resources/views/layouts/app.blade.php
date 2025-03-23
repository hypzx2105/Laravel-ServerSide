<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Panama</title>

    {{-- TailwindCSS & Google Fonts --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    {{-- Font Awesome for Icons --}}
    <script src="https://kit.fontawesome.com/c430711940.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    {{-- Navbar --}}
    <nav class="bg-white shadow-md fixed w-full top-0 left-0 z-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                
                {{-- Logo --}}
                <div>
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/panamajpg.webp') }}" alt="Tourism Panama" class="h-20">
                    </a>
                </div>

                {{-- Navigation --}}
<div class="hidden md:flex space-x-6 text-lg">
    <a href="{{ route('home') }}" class="hover:text-red-600">Home</a>
    <a href="{{ route('destinations.index') }}" class="hover:text-red-600">Destinations</a>
    <a href="{{ route('blog.index') }}" class="hover:text-red-600">Blog</a>
    <a href="{{ route('contact') }}" class="hover:text-red-600">Contact</a>
    <a href="{{ route('favorites.index') }}" class="hover:text-red-600">Favorites</a>
</div>


                {{-- Icons --}}
                <div class="flex space-x-4 items-center">
                    {{-- Search Bar --}}
                    <div class="relative">
                        <input type="text" id="searchInput" placeholder="Search..." class="px-4 py-2 border rounded-full w-40">
                        <button class="absolute right-3 top-2 text-gray-500">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>

                    {{-- Favorites Page Link --}}
                    <a href="{{ route('favorites.index') }}" class="text-gray-500 hover:text-red-600 text-xl">
                        <i class="fas fa-heart"></i>
                    </a>

                    {{-- Language Switcher --}}
                    <div class="relative">
                        <i class="fas fa-globe text-gray-500 absolute left-3 top-2.5"></i>
                        <select id="languageSwitcher" class="border rounded-full pl-8 pr-4 py-1 bg-white text-gray-700">
                            <option value="en">English</option>
                            <option value="es">Español</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{-- Page Content --}}
    <div class="mt-24">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-white mt-12 py-6">
        <div class="text-center text-sm">
            &copy; {{ date('Y') }} Tourism Panama. All rights reserved.
        </div>
    </footer>

    {{-- JavaScript --}}
    <script src="{{ asset('js/app.js') }}" defer></script>


</body>
</html>
