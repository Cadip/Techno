@extends('base')

@section('content')
<div class="p-6">
    <!-- Booking Form Section -->
    <div class="flex space-x-8">
        <div class="w-1/3">
            <h1 class="text-2xl font-semibold text-gray-800">Place Details</h1>
            <div class="mt-4">
                <img src="/images/seven.jpg" alt="Place Image" class="w-full h-40 object-cover rounded-lg">
                <p class="text-lg text-gray-600 mt-2">Location: Jakarta, Indonesia</p>
                <p class="text-lg text-gray-600 mt-1">Opening Hours: 09:00 AM - 06:00 PM</p>
                <p class="text-lg text-gray-600 mt-1">Contact: +62 812-3456-7890</p>
                <p class="text-lg text-gray-600 mt-1">Rating: ★★★★☆</p>
            </div>
        </div>

        <div class="w-2/3">
            <!-- Booking Form -->
            <form action="/submit-booking" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700">Phone Number</label>
                    <input type="text" id="phone" name="phone" class="w-full p-3 border border-gray-300 rounded-lg mt-2" placeholder="Enter your phone number">
                </div>

                <div class="mb-4">
                    <label for="booking_date" class="block text-gray-700">Booking Date</label>
                    <input type="date" id="booking_date" name="booking_date" class="w-full p-3 border border-gray-300 rounded-lg mt-2">
                </div>

                <div class="mb-4">
                    <label for="booking_time" class="block text-gray-700">Booking Time</label>
                    <input type="time" id="booking_time" name="booking_time" class="w-full p-3 border border-gray-300 rounded-lg mt-2">
                </div>

                <div class="mb-4">
                    <label for="note" class="block text-gray-700">Note</label>
                    <textarea id="note" name="note" class="w-full p-3 border border-gray-300 rounded-lg mt-2" placeholder="Add any additional notes" rows="4"></textarea>
                </div>

                <div class="mb-4">
                    <label for="payment_method" class="block text-gray-700">Payment Method</label>
                    <select id="payment_method" name="payment_method" class="w-full p-3 border border-gray-300 rounded-lg mt-2">
                        <option value="ovo">OVO</option>
                        <option value="bca">BCA</option>
                        <option value="gopay">GoPay</option>
                        <option value="cash">Cash</option>
                    </select>
                </div>

                <button type="submit" class="w-full px-6 py-3 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
@endsection
