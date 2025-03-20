<nav class="bg-white shadow-md py-4 px-6 flex justify-between items-center">
    <a href="{{ url('/') }}" class="text-2xl font-bold text-red-600">Tourism Panama</a>
    <ul class="flex space-x-6">
        <li><a href="{{ url('/') }}" class="text-gray-800 hover:text-red-500 font-semibold">Home</a></li>
        <li><a href="{{ route('destinations') }}" class="text-gray-800 hover:text-red-500 font-semibold">Destinations</a></li>
        <li><a href="{{ route('blog.index') }}" class="text-gray-800 hover:text-red-500 font-semibold">Blog</a></li>
        <li><a href="{{ route('contact') }}" class="text-gray-800 hover:text-red-500 font-semibold">Contact</a></li>
        <li><a href="{{ route('map') }}" class="hover:text-red-600">Map</a></li>

    </ul>
</nav>
