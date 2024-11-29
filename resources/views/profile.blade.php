@extends('base')

@section('content')
<div class="p-6">
    <!-- Profile Section -->
    <div class="flex flex-col items-center">
        <!-- Profile Picture -->
        <img src="/images/profile.jpg" alt="Profile Picture" class="w-32 h-32 rounded-full border-2 border-gray-300 mb-4">

        <!-- Member Details -->
        <h1 class="text-2xl font-semibold text-gray-800">Andreas Harry</h1>
        <p class="text-sm text-gray-600 mt-2">c14220000@example.com</p>
        <p class="text-sm text-gray-600 mt-1">08123456789</p>
    </div>

    <!-- Buttons Section -->
    <div class="flex justify-center gap-8 mt-16">
        <!-- Edit Profile Button -->
        <a href="/edit-profile" class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow-lg hover:bg-blue-500 transition">Edit Profile</a>

        <!-- Logout Button -->
        <a href="/login" class="px-4 py-2 bg-red-600 text-white rounded-lg shadow-lg hover:bg-red-500 transition">Logout</a>
    </div>
</div>
@endsection
