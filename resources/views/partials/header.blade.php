<header class="bg-white shadow-md fixed w-full z-50">
    <div class="container mx-auto flex items-center justify-between px-6 py-3">
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('logo.svg') }}" alt="C & A Chardham and Adventure Logo" class="h-10 w-auto" />
        </a>
        <nav class="hidden md:flex space-x-8 items-center">
            {{-- <a href="#" class="text-gray-700 hover:text-red-600 font-semibold">Flights</a> --}}
            <a href="{{ route('hotel-listing') }}" class="text-gray-700 hover:text-red-600 font-semibold">Hotels</a>
            {{-- <a href="#" class="text-gray-700 hover:text-red-600 font-semibold">Trains</a> --}}
            {{-- <a href="#" class="text-gray-700 hover:text-red-600 font-semibold">Buses</a> --}}
            <a href="#" class="text-gray-700 hover:text-red-600 font-semibold">Cabs</a>
            <a href="#" class="text-gray-700 hover:text-red-600 font-semibold">Holiday Packages</a>
        </nav>
        <div class="hidden md:flex items-center space-x-4">
            <a href="{{ route('login') }}" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg shadow-sm hover:bg-gray-300 transition font-semibold inline-block">Login</a>
            <a href="{{ route('register') }}" class="bg-red-600 text-white px-4 py-2 rounded-lg shadow hover:bg-red-700 transition font-semibold inline-block">Sign up</a>
        </div>
        <div class="md:hidden flex items-center">
            <button id="mobile-menu-btn" class="text-gray-700 focus:outline-none bg-gray-200 p-2 rounded-lg shadow hover:bg-gray-300 transition">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden bg-white shadow-md">
        <nav class="flex flex-col p-4 space-y-4">
            {{-- <a href="#" class="text-gray-700 hover:text-red-600 font-semibold">Flights</a> --}}
            <a href="{{ route('hotel-listing') }}" class="text-gray-700 hover:text-red-600 font-semibold">Hotels</a>
            {{-- <a href="#" class="text-gray-700 hover:text-red-600 font-semibold">Trains</a> --}}
            {{-- <a href="#" class="text-gray-700 hover:text-red-600 font-semibold">Buses</a> --}}
            <a href="#" class="text-gray-700 hover:text-red-600 font-semibold">Cabs</a>
            <a href="#" class="text-gray-700 hover:text-red-600 font-semibold">Holiday Packages</a>
            <div class="pt-4 border-t border-gray-200 flex space-x-4">
                <a href="{{ route('login') }}" class="text-gray-700 hover:text-red-600 font-semibold">Login</a>
                <a href="{{ route('register') }}" class="bg-red-600 text-white px-4 py-1 rounded hover:bg-red-700 font-semibold">Sign up</a>
            </div>
        </nav>
    </div>
</header>
<script>
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
