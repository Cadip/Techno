@extends('base')

@section('content')
<div class="flex flex-col">
    <!-- Tournament Section -->
    <div class="flex flex-col p-6">
        <div class="flex">
            <h1 class="text-2xl font-semibold">Tournament</h1>
        </div>
        <div class="flex mt-4">
            <!-- Tournament Card -->
            <div class="max-w-[150px] max-h-[250px] bg-white border border-gray-200 rounded-lg shadow-lg">
                <img src="/images/tour1.jpg" alt="Tournament Poster" class="rounded-t-lg w-full h-full object-cover">
            </div>
        </div>
    </div>

    <!-- Places Section -->
    <div class="flex flex-col p-6">
        <div class="flex">
            <h1 class="text-2xl font-semibold">Places</h1>
        </div>

        <div class="flex mt-4">
            <!-- Places Card -->
            <div class="max-w-[150px] bg-purple-600 border border-gray-200 rounded-lg shadow-lg">
                <img src="/images/seven.jpg" alt="Place Image" class="rounded-t-lg w-full h-32 object-cover">
                <div class="p-3">
                    <h1 class="text-sm font-semibold text-black flex justify-center">Place Name</h1>
                    <p class="mt-2 text-xs text-white">Lokasi: Jakarta, Indonesia</p>
                    <p class="mt-1 text-xs text-white">Status: Available</p>
                    <p class="mt-1 text-xs text-white">Harga: Rp 100.000</p>
                </div>
                <!-- Details Button -->
                <div class="p-2 flex justify-center">
                    <a href="/detailPlaces" class="bg-blue-500 text-white text-xs py-2 px-4 rounded-lg hover:bg-blue-700">
                        Details
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
