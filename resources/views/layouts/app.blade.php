<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GraphicGuru') }}</title>

    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4f46e5',
                        secondary: '#10b981',
                        dark: '#1f2937',
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('home') }}" class="text-2xl font-bold text-primary tracking-tighter">
                            GraphicGuru
                        </a>
                    </div>
                    <!-- Nav Links -->
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="{{ route('home') }}" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Home
                        </a>
                        <a href="{{ route('products.index') }}" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Marketplace
                        </a>
                    </div>
                </div>
                <div class="flex items-center">
                    @auth
                        <a href="{{ route('admin.dashboard') }}" class="text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Log out</button>
                        </form>
                    @else
                        <!-- These routes would come from Breeze/Jetstream -->
                        <a href="/login" class="text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Log in</a>
                        <a href="/register" class="ml-4 bg-primary hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium transition">Get Started</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-12 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-lg font-bold mb-4">GraphicGuru</h3>
                <p class="text-gray-400 text-sm">Premium digital assets for creators.</p>
            </div>
            <div>
                <h4 class="text-md font-semibold mb-4">Links</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="#" class="hover:text-white">About Us</a></li>
                    <li><a href="#" class="hover:text-white">Contact</a></li>
                    <li><a href="#" class="hover:text-white">Terms of Service</a></li>
                </ul>
            </div>
             <div>
                <h4 class="text-md font-semibold mb-4">Subscribe</h4>
                 <p class="text-gray-400 text-sm mb-2">Get the latest updates directly to your inbox.</p>
                <!-- Newsletter placeholder -->
            </div>
        </div>
    </footer>
</body>
</html>
