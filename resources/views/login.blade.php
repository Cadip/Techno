<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-purple-600">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center text-purple-700">LOGIN</h2>
        <form class="space-y-4">
            <div>
                <input
                    type="email"
                    placeholder="Email"
                    required
                    class="w-full px-4 py-2 text-sm border rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none">
            </div>
            <div>
                <input
                    type="password"
                    placeholder="Password"
                    required
                    class="w-full px-4 py-2 text-sm border rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none">
            </div>
            <div class="text-right">
                <a href="#" class="text-sm text-purple-500 hover:underline">Forgot Password?</a>
            </div>
            <button
                type="submit"
                class="w-full py-2 text-white bg-purple-600 rounded-lg hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500">
                LOGIN
            </button>
            <div class="relative flex items-center justify-center">
                <div class="w-1/3 h-px bg-gray-300"></div>
                <span class="px-2 text-sm text-gray-500 bg-white">OR</span>
                <div class="w-1/3 h-px bg-gray-300"></div>
            </div>
            <div class="flex items-center justify-center space-x-4">
                <button type="button" class="p-1 border rounded-full hover:bg-gray-100">
                    <img src="{{ asset('images/google-icon.png') }}" alt="Google Logo" class="w-6 h-6">
                </button>
                <button type="button" class="p-1 border rounded-full hover:bg-gray-100">
                    <img src="{{ asset('images/x-icon.png') }}" alt="X Logo" class="w-6 h-6">
                </button>
                <button type="button" class="p-1 border rounded-full hover:bg-gray-100">
                    <img src="{{ asset('images/facebook-icon.png') }}" alt="Facebook Logo" class="w-6 h-6">
                </button>
            </div>

        </form>
        <p class="text-sm text-center text-gray-500">
            Don't have an account?
            <a href="/signup" class="font-medium text-purple-600 hover:underline">SIGN UP</a>
        </p>
    </div>
</body>

</html>
