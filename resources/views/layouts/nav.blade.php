<nav class="flex justify-between items-center px-8 py-4 shadow-md bg-white">
 
    <!-- Center: Navigation Links -->
    <div class="flex space-x-6">
        <a href="{{ route('home') }}" class="font-semibold hover:underline">Things to do</a>
        <a href="{{ route('destinations.index') }}" class="font-semibold hover:underline">Where to go</a>
       
    </div>

    <!-- Right: Icons -->
    <div class="flex items-center space-x-4">
        <!-- Search Button -->
        <button id="search-btn" class="p-2 border rounded-full hover:bg-gray-100">
            🔍
        </button>

        <!-- Search Input (Initially Hidden) -->
        <input type="text" id="searchInput" placeholder="Search..."
            class="hidden px-4 py-2 border rounded-full w-40 focus:outline-none focus:ring-2 focus:ring-red-400">

    

        
    </div>
</nav>
