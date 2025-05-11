@extends('layouts.app')

@section('title', 'Hotel Listing - Chardham Adventure')

@section('content')
    @include('partials.header')

    <div class="mt-6">
        @include('partials.booking-tabs')
    </div>
    <main class="container mx-auto mt-10 px-6 py-12 flex flex-col md:flex-row space-x-0 md:space-x-8">
        <!-- Filters Toggle Button for Mobile -->
        <div class="md:hidden mb-4">
            <button id="filters-toggle" class="bg-red-600 text-white px-4 py-2 rounded-md font-semibold">
                <i class="fas fa-filter"></i> Filters
            </button>
        </div>

        <!-- Filters Sidebar -->
        <aside id="filterSection" class="w-full md:w-80 bg-white rounded-lg shadow-md p-6 sticky top-20 h-[calc(100vh-5rem)] overflow-y-auto hidden md:block">
            <h2 class="text-2xl font-bold mb-6">Filters</h2>
            <form method="GET" action="{{ route('hotel')}}" class="space-y-6">
                <div>
                    <label for="checkin" class="block text-sm font-medium text-gray-700 mb-1">Check-in</label>
                    <input type="date" id="checkin" name="checkin" class="w-full border border-gray-300 rounded-md p-2" />
                </div>
                <div>
                    <label for="checkout" class="block text-sm font-medium text-gray-700 mb-1">Check-out</label>
                    <input type="date" id="checkout" name="checkout" class="w-full border border-gray-300 rounded-md p-2" />
                </div>
                <div>
                    <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City</label>
                    <input type="text" id="city" name="city" placeholder="Enter city" class="w-full border border-gray-300 rounded-md p-2" />
                </div>
                <div>
                    <label for="rooms" class="block text-sm font-medium text-gray-700 mb-1">Rooms</label>
                    <select id="rooms" name="rooms" class="w-full border border-gray-300 rounded-md p-2">
                        <option value="1">1 Room</option>
                        <option value="2">2 Rooms</option>
                        <option value="3">3 Rooms</option>
                        <option value="4">4 Rooms</option>
                    </select>
                </div>
                <div>
                    <label for="guests" class="block text-sm font-medium text-gray-700 mb-1">Guests</label>
                    <select id="guests" name="guests" class="w-full border border-gray-300 rounded-md p-2">
                        <option value="1">1 Guest</option>
                        <option value="2">2 Guests</option>
                        <option value="3">3 Guests</option>
                        <option value="4">4 Guests</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Star Rating</label>
                    <div class="flex space-x-2">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="stars[]" value="5" class="form-checkbox" />
                            <span class="ml-2">5 Stars</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="stars[]" value="4" class="form-checkbox" />
                            <span class="ml-2">4 Stars</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="stars[]" value="3" class="form-checkbox" />
                            <span class="ml-2">3 Stars</span>
                        </label>
                    </div>
                </div>

                <div>
                    <label for="price_min" class="block text-sm font-medium text-gray-700 mb-1">Min Price</label>
                    <input type="number" id="price_min" name="price_min" placeholder="0" class="w-full border border-gray-300 rounded-md p-2" />
                </div>
                <div>
                    <label for="price_max" class="block text-sm font-medium text-gray-700 mb-1">Max Price</label>
                    <input type="number" id="price_max" name="price_max" placeholder="1000" class="w-full border border-gray-300 rounded-md p-2" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Popular Filters</label>
                    <div class="flex flex-col space-y-2">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="popular[]" value="free_wifi" class="form-checkbox" />
                            <span class="ml-2">Free Wi-Fi</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="popular[]" value="pool" class="form-checkbox" />
                            <span class="ml-2">Swimming Pool</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="popular[]" value="parking" class="form-checkbox" />
                            <span class="ml-2">Parking</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="popular[]" value="spa" class="form-checkbox" />
                            <span class="ml-2">Spa</span>
                        </label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full bg-red-600 text-white py-3 rounded-md font-semibold hover:bg-red-700 transition">
                        Search
                    </button>
                </div>
            </form>
        </aside>

        <!-- Hotel Listings -->
        <section class="flex-1 grid grid-cols-1 gap-8">
            <!-- Sample Hotel Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col md:flex-row">
                <img src="https://images.pexels.com/photos/261102/pexels-photo-261102.jpeg" alt="Hotel Image" class="w-full md:w-64 h-48 object-cover" />
                <div class="p-4 flex flex-col justify-between flex-1">
                    <div>
                        <h2 class="text-xl font-semibold mb-2">Hotel Sunshine</h2>
                        <p class="text-gray-600 mb-2">Joshimath, Uttarakhand</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="ml-2 text-gray-600">(120 reviews)</span>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Free Wi-Fi, Swimming Pool, Fitness Center, Restaurant & Bar, 24/7 Room Service
                        </p>
                    </div>
                    <div>
                        <p class="text-red-600 font-bold text-2xl mb-4">$120 per night</p>
                        <a href="{{ route('hotel') }}" class="block bg-red-600 text-white text-center py-2 rounded-md hover:bg-red-700 transition">
                            View Details
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col md:flex-row">
                <img src="https://images.pexels.com/photos/261103/pexels-photo-261103.jpeg" alt="Hotel Image" class="w-full md:w-64 h-48 object-cover" />
                <div class="p-4 flex flex-col justify-between flex-1">
                    <div>
                        <h2 class="text-xl font-semibold mb-2">Mountain View Resort</h2>
                        <p class="text-gray-600 mb-2">Rishikesh, Uttarakhand</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="ml-2 text-gray-600">(98 reviews)</span>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Free Wi-Fi, Parking, Spa, Restaurant & Bar
                        </p>
                    </div>
                    <div>
                        <p class="text-red-600 font-bold text-2xl mb-4">$150 per night</p>
                        <a href="{{ route('hotel') }}" class="block bg-red-600 text-white text-center py-2 rounded-md hover:bg-red-700 transition">
                            View Details
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col md:flex-row">
                <img src="https://images.pexels.com/photos/261104/pexels-photo-261104.jpeg" alt="Hotel Image" class="w-full md:w-64 h-48 object-cover" />
                <div class="p-4 flex flex-col justify-between flex-1">
                    <div>
                        <h2 class="text-xl font-semibold mb-2">Lakeview Hotel</h2>
                        <p class="text-gray-600 mb-2">Nainital, Uttarakhand</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="ml-2 text-gray-600">(75 reviews)</span>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Free Wi-Fi, Fitness Center, Spa, 24/7 Room Service
                        </p>
                    </div>
                    <div>
                        <p class="text-red-600 font-bold text-2xl mb-4">$100 per night</p>
                        <a href="{{ route('hotel') }}" class="block bg-red-600 text-white text-center py-2 rounded-md hover:bg-red-700 transition">
                            View Details
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col md:flex-row">
                <img src="https://images.pexels.com/photos/261104/pexels-photo-261104.jpeg" alt="Hotel Image" class="w-full md:w-64 h-48 object-cover" />
                <div class="p-4 flex flex-col justify-between flex-1">
                    <div>
                        <h2 class="text-xl font-semibold mb-2">Lakeview Hotel</h2>
                        <p class="text-gray-600 mb-2">Nainital, Uttarakhand</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="ml-2 text-gray-600">(75 reviews)</span>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Free Wi-Fi, Fitness Center, Spa, 24/7 Room Service
                        </p>
                    </div>
                    <div>
                        <p class="text-red-600 font-bold text-2xl mb-4">$100 per night</p>
                        <a href="{{ route('hotel') }}" class="block bg-red-600 text-white text-center py-2 rounded-md hover:bg-red-700 transition">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col md:flex-row">
                <img src="https://images.pexels.com/photos/261104/pexels-photo-261104.jpeg" alt="Hotel Image" class="w-full md:w-64 h-48 object-cover" />
                <div class="p-4 flex flex-col justify-between flex-1">
                    <div>
                        <h2 class="text-xl font-semibold mb-2">Lakeview Hotel</h2>
                        <p class="text-gray-600 mb-2">Nainital, Uttarakhand</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="ml-2 text-gray-600">(75 reviews)</span>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Free Wi-Fi, Fitness Center, Spa, 24/7 Room Service
                        </p>
                    </div>
                    <div>
                        <p class="text-red-600 font-bold text-2xl mb-4">$100 per night</p>
                        <a href="{{ route('hotel') }}" class="block bg-red-600 text-white text-center py-2 rounded-md hover:bg-red-700 transition">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col md:flex-row">
                <img src="https://images.pexels.com/photos/261104/pexels-photo-261104.jpeg" alt="Hotel Image" class="w-full md:w-64 h-48 object-cover" />
                <div class="p-4 flex flex-col justify-between flex-1">
                    <div>
                        <h2 class="text-xl font-semibold mb-2">Lakeview Hotel</h2>
                        <p class="text-gray-600 mb-2">Nainital, Uttarakhand</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="ml-2 text-gray-600">(75 reviews)</span>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Free Wi-Fi, Fitness Center, Spa, 24/7 Room Service
                        </p>
                    </div>
                    <div>
                        <p class="text-red-600 font-bold text-2xl mb-4">$100 per night</p>
                        <a href="{{ route('hotel') }}" class="block bg-red-600 text-white text-center py-2 rounded-md hover:bg-red-700 transition">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        const filtersToggle = document.getElementById('filters-toggle');
        const filterSection = document.getElementById('filterSection');

        filtersToggle.addEventListener('click', () => {
            if (filterSection.style.display === 'block') {
                filterSection.style.display = 'none';
            } else {
                filterSection.style.display = 'block';
            }
        });
    </script>
    @include('partials.mobile-nav')
@endsection
