@extends('base')

@section('content')
<div class="p-6">
    <!-- Detail Places Section -->
    <div class="flex items-center space-x-6">
        <!-- Left: Image Section -->
        <div class="w-1/3">
            <img src="/images/seven.jpg" alt="Place Image" class="w-full h-64 object-cover rounded-lg">
        </div>

        <!-- Right: Details Section -->
        <div class="w-2/3">
            <h1 class="text-3xl font-semibold text-gray-800">Place Name</h1>
            <p class="text-lg text-gray-600 mt-2">Location: Jakarta, Indonesia</p>
            <p class="text-lg text-gray-600 mt-1">Opening Hours: 09:00 AM - 06:00 PM</p>
            <p class="text-lg text-gray-600 mt-1">Contact: +62 812-3456-7890</p>
            <p class="text-lg text-gray-600 mt-1">Rating: ★★★★☆</p>
        </div>
    </div>

    <!-- Button to Booking Page -->
    <div class="mt-6 text-center">
        <a href="/booking" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700">
            Pesan
        </a>
    </div>
</div>
@endsection
