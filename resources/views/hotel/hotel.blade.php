@extends('layouts.app')

@section('title', 'Hotel Details - Chardham Adventure')

@section('content')
    @include('partials.header')

    <main class="container mx-auto px-6 py-12">
        @include('partials.booking-tabs')
        <div class="max-w-6xl mx-auto bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-4xl font-bold mb-6">Hotel Name</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Hotel Images -->
                <div>
                    <img id="mainImage" src="https://images.pexels.com/photos/261102/pexels-photo-261102.jpeg" alt="Hotel Image" class="w-full h-80 object-cover rounded-lg mb-4" />
                    <div class="grid grid-cols-4 gap-2">
                        <img src="https://images.pexels.com/photos/261102/pexels-photo-261102.jpeg" alt="Hotel Image 1" class="w-full h-24 object-cover rounded-lg cursor-pointer" onclick="changeImage(this.src)" />
                        <img src="https://images.pexels.com/photos/261103/pexels-photo-261103.jpeg" alt="Hotel Image 2" class="w-full h-24 object-cover rounded-lg cursor-pointer" onclick="changeImage(this.src)" />
                        <img src="https://images.pexels.com/photos/261104/pexels-photo-261104.jpeg" alt="Hotel Image 3" class="w-full h-24 object-cover rounded-lg cursor-pointer" onclick="changeImage(this.src)" />
                        <button id="viewAllBtn" class="bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition">
                            View All
                        </button>
                    </div>
                </div>
                <!-- Hotel Details -->
                <div class="flex flex-col justify-between">
                    <div>
                        <h2 class="text-2xl font-semibold mb-4">About the Hotel</h2>
                        <p class="text-gray-700 mb-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque aliquam odio et faucibus. Nulla rhoncus feugiat eros quis consectetur.
                        </p>
                        <h3 class="text-xl font-semibold mb-2">Amenities</h3>
                        <ul class="list-disc list-inside text-gray-700 mb-6">
                            <li>Free Wi-Fi</li>
                            <li>Swimming Pool</li>
                            <li>Fitness Center</li>
                            <li>Restaurant & Bar</li>
                            <li>24/7 Room Service</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Price per Night</h3>
                        <p class="text-3xl font-bold text-red-600 mb-6">$120</p>
                        <a class="w-full bg-red-600 text-white py-4 rounded-lg font-semibold hover:bg-red-700 transition"
                           href="{{ route('hotel.booking') }}">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
    @include('partials.mobile-nav')

    <script>
        function changeImage(src) {
            document.getElementById('mainImage').src = src;
        }

        document.addEventListener('DOMContentLoaded', function () {
            const viewAllBtn = document.getElementById('viewAllBtn');
            const modal = document.createElement('div');
            modal.id = 'imageModal';
            modal.className = 'fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden';
            modal.innerHTML = `
                <div class="bg-white rounded-lg p-4 max-w-5xl w-full max-h-[90vh] overflow-hidden relative flex flex-col">
                    <button id="closeModal" class="absolute top-2 right-2 text-gray-700 hover:text-gray-900 text-3xl font-bold z-50">&times;</button>
                    <div class="flex-1 flex items-center justify-center relative">
                        <button id="prevBtn" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-200 rounded-full p-2 hover:bg-gray-300 z-40">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <img id="modalImage" src="https://images.pexels.com/photos/261102/pexels-photo-261102.jpeg" class="max-h-[85vh] max-w-full object-contain rounded-lg" />
                        <img id="modalImage" src="https://images.pexels.com/photos/261103/pexels-photo-261103.jpeg" class="max-h-[85vh] max-w-full object-contain rounded-lg" />
                        <img id="modalImage" src="https://images.pexels.com/photos/261104/pexels-photo-261104.jpeg" class="max-h-[85vh] max-w-full object-contain rounded-lg" />
                        <button id="nextBtn" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-200 rounded-full p-2 hover:bg-gray-300 z-40">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            `;
            document.body.appendChild(modal);

            viewAllBtn.addEventListener('click', () => {
                modal.classList.remove('hidden');
                currentIndex = 0;
                modalImage.src = images[currentIndex];
            });

            closeModalBtn.addEventListener('click', () => {
                modal.classList.add('hidden');
            });

            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                }
            });

            prevBtn.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                modalImage.src = images[currentIndex];
            });

            nextBtn.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % images.length;
                modalImage.src = images[currentIndex];
            });
        });
    </script>
@endsection
