<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="shadow-md bg-purple-600 flex items-center">
        <!-- Logo -->
        <a href="#" class="flex items-center">
            <img src="/images/logo.png" alt="Logo" class="h-16 w-16"> <!-- Menetapkan tinggi logo -->
        </a>

        <!-- Navbar Links (Center with Flex) -->
        <div class="flex items-center space-x-6 ml-6 flex-grow">
            <a href="/homepage" class="text-white hover:text-blue-500">Home</a>
            <a href="/riwayat" class="text-white hover:text-blue-500">Riwayat Transaksi</a>
            <a href="/faqs" class="text-white hover:text-blue-500">FAQs</a>
        </div>

        <!-- Profile Photo -->
        <div class="flex items-center px-4">
            <a href="/profile" class="flex items-center">
                <img src="/images/profile.jpg" alt="Profile" class="w-8 h-8 rounded-full border-2 border-gray-300">
            </a>
        </div>
    </nav>

    <div class="container-fluid">
        @yield('content')
    </div>

</body>

</html>
