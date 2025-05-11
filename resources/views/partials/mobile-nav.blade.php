<nav class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-300 shadow-md md:hidden z-50">
    <div class="flex justify-around">
        <a class="flex flex-col items-center justify-center py-2 text-gray-600 hover:text-red-600 focus:outline-none"
           href="{{ url('/') }}">
            <i class="fas fa-home text-xl"></i>
            <span class="text-xs mt-1">Home</span>
        </a>
        <a class="flex flex-col items-center justify-center py-2 text-gray-600 hover:text-red-600 focus:outline-none"
           href="{{ route('hotel-listing') }}">
            <i class="fas fa-hotel text-xl"></i>
            <span class="text-xs mt-1">Hotels</span>
        </a>
        <button class="flex flex-col items-center justify-center py-2 text-gray-600 hover:text-red-600 focus:outline-none">
            <i class="fas fa-heart text-xl"></i>
            <span class="text-xs mt-1">Favorites</span>
        </button>
        <button class="flex flex-col items-center justify-center py-2 text-gray-600 hover:text-red-600 focus:outline-none">
            <i class="fas fa-user text-xl"></i>
            <span class="text-xs mt-1">Profile</span>
        </button>
    </div>
</nav>
