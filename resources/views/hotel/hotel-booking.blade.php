@extends('layouts.app')

@section('title', 'Hotel Review - Chardham Adventure')

@section('content')
    @include('partials.header')

    <main class="container mx-auto px-6 pt-24 pb-12 max-w-6xl grid grid-cols-1 md:grid-cols-3 gap-8">        <!-- Hotel Details Left Column -->
        <section class="md:col-span-2 space-y-6">
            <h1 class="text-4xl font-bold mb-2">Super Hotel O Tapovan Near Deacon Valley</h1>
            <div class="flex space-x-4 text-gray-600 mb-2">
                <span>01234</span>
                <span>01234</span>
            </div>
            <!-- Booking Details -->
            <div class="bg-white rounded-lg shadow p-6 mt-6">
                <h2 class="text-2xl font-bold mb-4">Booking Details</h2>
                <div class="grid grid-cols-2 gap-4 text-gray-700">
                    <div>
                        <p class="font-semibold">CHECK IN</p>
                        <p>Sat 3 May 2025</p>
                        <p>12 PM</p>
                        <p>1 Night</p>
                    </div>
                    <div>
                        <p class="font-semibold">CHECK OUT</p>
                        <p>Sun 4 May 2025</p>
                        <p>11 AM</p>
                        <p>1 Night | 2 Adults | 1 Room</p>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="font-semibold">Classic</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li>2 Adults</li>
                        <li>Room With Free Cancellation</li>
                        <li>No meals included</li>
                        <li>Early Check-In upto 2 hours (subject to availability)</li>
                        <li>Complimentary Late check-out</li>
                        <li>Free Cancellation before <span class="font-semibold">01 May 11:59 AM</span></li>
                        {{-- <li class="text-sm text-gray-500">Cancellation policy details</li> --}}
                        <li class="font-semibold mt-4">100% Refundable</li>
                    </ul>

                    {{-- <p class="font-semibold text-red-600">Non Refundable</p>
                    <p>NOW</p>
                    <p>01 May</p>
                    <p>11:59 AM</p>
                    <p>03 May</p>
                    <p>11:59 AM</p>
                    <p>Check-in</p>
                    <p>See Inclusions</p>
                    <p class="mt-4 font-semibold text-red-600 cursor-pointer hover:underline">Upgrade Your Stay</p> --}}
                    {{-- <p class="mt-2">Add Breakfast for <span class="font-semibold">₹ 256</span> for all guests</p> --}}
                </div>
            </div>
            {{-- <p class="text-red-600 font-semibold mb-2">Couple Friendly</p>
            <p class="text-gray-600 mb-4">Near Deecon Valley, Badrinath Highway, Tapovan, Rishikesh, Rishikesh, India</p> --}}
            {{-- <div class="flex items-center space-x-4 mb-6">
                <div class="flex text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span class="text-gray-700 font-semibold">4.5/5</span>
                <span class="text-gray-500">(120 Reviews)</span>
            </div> --}}

            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-2xl font-bold mb-4">Important information</h2>
                <ul class="list-disc list-inside space-y-2 text-gray-700">
                    <li>Free Wi-Fi</li>
                    <li>Swimming Pool</li>
                    <li>Fitness Center</li>
                    <li>Restaurant & Bar</li>
                    <li>24/7 Room Service</li>
                </ul>
            </div>


        </section>

        <!-- Price Breakup Right Column -->
        <section class="bg-white rounded-lg shadow p-6 md:col-span-1 sticky top-20 h-fit">
            <h2 class="text-2xl font-bold mb-6">Price Breakup</h2>
            <div class="space-y-4 text-gray-700">
                <div class="flex justify-between">
                    <span>Room Price</span>
                    <span>₹9,000</span>
                </div>
                <div class="flex justify-between">
                    <span>Taxes & Fees</span>
                    <span>₹1,200</span>
                </div>
                <div class="flex justify-between font-semibold border-t pt-2">
                    <span>Total Price</span>
                    <span>₹10,200</span>
                </div>
            </div>
            <button class="mt-6 w-full bg-red-600 text-white py-3 rounded-md font-semibold hover:bg-red-700 transition">
                Book Now
            </button>
        </section>
    </main>

    @include('partials.footer')
@endsection
