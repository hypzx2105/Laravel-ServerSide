<nav class="bg-white shadow-md p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold text-red-500">Tourism Panama</h1>
        <ul class="flex space-x-6">
            <li><a href="{{ route('home') }}" class="hover:text-red-500">Home</a></li>
            <li><a href="{{ route('destinations') }}" class="hover:text-red-500">Destinations</a></li>
            <li><a href="{{ route('blog.index') }}" class="hover:text-red-500">Blog</a></li>
            <li><a href="{{ route('map') }}" class="hover:text-red-500">Map</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-red-500">Contact</a></li>
        </ul>
    </div>
</nav>
