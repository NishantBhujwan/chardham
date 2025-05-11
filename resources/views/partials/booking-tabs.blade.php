<section class="bg-white shadow-md rounded-lg max-w-6xl mx-auto px-6 py-8 mt-12 relative z-10">
    <div class="flex space-x-6 border-b border-gray-300 mb-6 overflow-x-auto no-scrollbar">
        {{-- <button class="tab-btn active-tab pb-2 border-b-4 border-red-600 font-semibold text-red-600 whitespace-nowrap" data-tab="flights">Flights</button> --}}
        <button class="tab-btn active-tab pb-2 border-b-4 border-red-600 font-semibold text-gray-600 hover:text-red-600 whitespace-nowrap" data-tab="hotels">Hotels</button>
        {{-- <button class="tab-btn pb-2 border-b-4 border-transparent font-semibold text-gray-600 hover:text-red-600 whitespace-nowrap" data-tab="trains">Trains</button> --}}
        {{-- <button class="tab-btn pb-2 border-b-4 border-transparent font-semibold text-gray-600 hover:text-red-600 whitespace-nowrap" data-tab="buses">Buses</button> --}}
        <button class="tab-btn pb-2 border-b-4 border-transparent font-semibold text-gray-600 hover:text-red-600 whitespace-nowrap" data-tab="cabs">Cabs</button>
        <button class="tab-btn pb-2 border-b-4 border-transparent font-semibold text-gray-600 hover:text-red-600 whitespace-nowrap" data-tab="holidays">Holiday Packages</button>
    </div>

    <!-- Flights Tab Content -->
    <div class="tab-content hidden" id="flights">
        <form class="grid grid-cols-1 md:grid-cols-6 gap-4 items-end">
            <div>
                <label for="from-flight" class="block text-sm font-semibold mb-1">From</label>
                <input type="text" id="from-flight" name="from-flight" placeholder="City or Airport" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="to-flight" class="block text-sm font-semibold mb-1">To</label>
                <input type="text" id="to-flight" name="to-flight" placeholder="City or Airport" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="departure-date" class="block text-sm font-semibold mb-1">Departure</label>
                <input type="date" id="departure-date" name="departure-date" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="return-date" class="block text-sm font-semibold mb-1">Return</label>
                <input type="date" id="return-date" name="return-date" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="passengers" class="block text-sm font-semibold mb-1">Passengers</label>
                <select id="passengers" name="passengers" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600">
                    <option>1 Adult</option>
                    <option>2 Adults</option>
                    <option>3 Adults</option>
                    <option>4 Adults</option>
                </select>
            </div>
            <div>
                <button type="submit" class="w-full bg-red-600 text-white py-2 rounded font-semibold hover:bg-red-700 transition">Search Flights</button>
            </div>
        </form>
    </div>

    <!-- Hotels Tab Content -->
    <div class="tab-content" id="hotels">
        <form class="grid grid-cols-1 md:grid-cols-5 gap-4 items-end">
            <div>
                <label for="location-hotel" class="block text-sm font-semibold mb-1">Location</label>
                <input type="text" id="location-hotel" name="location-hotel" placeholder="City or Hotel" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="checkin-date" class="block text-sm font-semibold mb-1">Check-in</label>
                <input type="date" id="checkin-date" name="checkin-date" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="checkout-date" class="block text-sm font-semibold mb-1">Check-out</label>
                <input type="date" id="checkout-date" name="checkout-date" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="guests" class="block text-sm font-semibold mb-1">Guests</label>
                <select id="guests" name="guests" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600">
                    <option>1 Guest</option>
                    <option>2 Guests</option>
                    <option>3 Guests</option>
                    <option>4 Guests</option>
                </select>
            </div>
            <div>
                <button type="submit" class="w-full bg-red-600 text-white py-2 rounded font-semibold hover:bg-red-700 transition">Search Hotels</button>
            </div>
        </form>
    </div>

    <!-- Trains Tab Content -->
    <div class="tab-content hidden" id="trains">
        <form class="grid grid-cols-1 md:grid-cols-6 gap-4 items-end">
            <div>
                <label for="from-train" class="block text-sm font-semibold mb-1">From</label>
                <input type="text" id="from-train" name="from-train" placeholder="Station" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="to-train" class="block text-sm font-semibold mb-1">To</label>
                <input type="text" id="to-train" name="to-train" placeholder="Station" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="train-date" class="block text-sm font-semibold mb-1">Date</label>
                <input type="date" id="train-date" name="train-date" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="train-class" class="block text-sm font-semibold mb-1">Class</label>
                <select id="train-class" name="train-class" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600">
                    <option>Sleeper</option>
                    <option>AC 3 Tier</option>
                    <option>AC 2 Tier</option>
                    <option>First Class</option>
                </select>
            </div>
            <div>
                <label for="train-passengers" class="block text-sm font-semibold mb-1">Passengers</label>
                <select id="train-passengers" name="train-passengers" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600">
                    <option>1 Passenger</option>
                    <option>2 Passengers</option>
                    <option>3 Passengers</option>
                    <option>4 Passengers</option>
                </select>
            </div>
            <div>
                <button type="submit" class="w-full bg-red-600 text-white py-2 rounded font-semibold hover:bg-red-700 transition">Search Trains</button>
            </div>
        </form>
    </div>

    <!-- Buses Tab Content -->
    <div class="tab-content hidden" id="buses">
        <form class="grid grid-cols-1 md:grid-cols-5 gap-4 items-end">
            <div>
                <label for="from-bus" class="block text-sm font-semibold mb-1">From</label>
                <input type="text" id="from-bus" name="from-bus" placeholder="City" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="to-bus" class="block text-sm font-semibold mb-1">To</label>
                <input type="text" id="to-bus" name="to-bus" placeholder="City" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="bus-date" class="block text-sm font-semibold mb-1">Date</label>
                <input type="date" id="bus-date" name="bus-date" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="bus-passengers" class="block text-sm font-semibold mb-1">Passengers</label>
                <select id="bus-passengers" name="bus-passengers" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600">
                    <option>1 Passenger</option>
                    <option>2 Passengers</option>
                    <option>3 Passengers</option>
                    <option>4 Passengers</option>
                </select>
            </div>
            <div>
                <button type="submit" class="w-full bg-red-600 text-white py-2 rounded font-semibold hover:bg-red-700 transition">Search Buses</button>
            </div>
        </form>
    </div>

    <!-- Cabs Tab Content -->
    <div class="tab-content hidden" id="cabs">
        <form class="grid grid-cols-1 md:grid-cols-5 gap-4 items-end">
            <div>
                <label for="pickup-location" class="block text-sm font-semibold mb-1">Pickup Location</label>
                <input type="text" id="pickup-location" name="pickup-location" placeholder="City or Airport" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="drop-location" class="block text-sm font-semibold mb-1">Drop Location</label>
                <input type="text" id="drop-location" name="drop-location" placeholder="City or Airport" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="cab-date" class="block text-sm font-semibold mb-1">Date</label>
                <input type="date" id="cab-date" name="cab-date" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="cab-time" class="block text-sm font-semibold mb-1">Time</label>
                <input type="time" id="cab-time" name="cab-time" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <button type="submit" class="w-full bg-red-600 text-white py-2 rounded font-semibold hover:bg-red-700 transition">Book Cab</button>
            </div>
        </form>
    </div>

    <!-- Holiday Packages Tab Content -->
    <div class="tab-content hidden" id="holidays">
        <form class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
            <div>
                <label for="holiday-destination" class="block text-sm font-semibold mb-1">Destination</label>
                <input type="text" id="holiday-destination" name="holiday-destination" placeholder="City or Package" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="holiday-start-date" class="block text-sm font-semibold mb-1">Start Date</label>
                <input type="date" id="holiday-start-date" name="holiday-start-date" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <label for="holiday-end-date" class="block text-sm font-semibold mb-1">End Date</label>
                <input type="date" id="holiday-end-date" name="holiday-end-date" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" />
            </div>
            <div>
                <button type="submit" class="w-full bg-red-600 text-white py-2 rounded font-semibold hover:bg-red-700 transition">Search Packages</button>
            </div>
        </form>
    </div>
</section>
