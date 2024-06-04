<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<div class="flex flex-col md:flex-row">
    <div class="w-full md:w-1/6 bg-gray-900 text-gray-200 min-h-screen p-6">
        <h2 class="text-2xl font-semibold">Admin Panel</h2>
        <nav>
            <ul class="mt-6">
                <li class="my-2"><a href="{{ route('dashboard') }}" class="block p-2 bg-gray-800 rounded hover:bg-gray-700">Dashboard</a></li>
                <li class="my-2"><a href="{{ route('home') }}" class="block p-2 bg-gray-800 rounded hover:bg-gray-700">Home Page</a></li>
                <li class="my-2"><a href="{{ route('about') }}" class="block p-2 bg-gray-800 rounded hover:bg-gray-700">About Us</a></li>
                <li class="my-2"><a href="{{ route('services') }}" class="block p-2 bg-gray-800 rounded hover:bg-gray-700">Services</a></li>
                <li class="my-2"><a href="{{ route('contact') }}" class="block p-2 bg-gray-800 rounded hover:bg-gray-700">Contact</a></li>
                <li class="my-2"><a href="{{ route('products') }}" class="block p-2 bg-gray-800 rounded hover:bg-gray-700">Products</a></li>
            </ul>
        </nav>
    </div>
    <div class="w-full md:w-1/8 p-6">
        @yield('content')
    </div>
</div>

</body>
</html>
