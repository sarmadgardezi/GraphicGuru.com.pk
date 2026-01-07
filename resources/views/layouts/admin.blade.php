<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GraphicGuru') }} - Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS (CDN for No-Node Usage) -->
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
<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Sidebar -->
        <aside class="w-full md:w-64 bg-gray-900 text-white flex-shrink-0">
            <div class="p-4 bg-gray-800">
                <h1 class="text-2xl font-bold tracking-wider">GraphicGuru</h1>
                <p class="text-xs text-gray-400 mt-1">Admin Panel</p>
            </div>
            
            <nav class="mt-6 px-4 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="block py-2.5 px-4 rounded transition duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-primary text-white' : 'hover:bg-gray-800 text-gray-300' }}">
                    Dashboard
                </a>
                <a href="{{ route('admin.products.index') }}" class="block py-2.5 px-4 rounded transition duration-200 {{ request()->routeIs('admin.products.*') ? 'bg-primary text-white' : 'hover:bg-gray-800 text-gray-300' }}">
                    Products
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-800 text-gray-300">
                    Users
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-800 text-gray-300">
                    Plans & Billing
                </a>
                 <div class="border-t border-gray-700 my-4"></div>
                <a href="{{ route('home') }}" target="_blank" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-800 text-gray-300">
                    View Live Site
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navbar -->
            <header class="bg-white shadow p-4 flex justify-between items-center">
                <button class="md:hidden text-gray-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-700 text-sm">Admin User</span>
                    <!-- Simplified Logout for MVP -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-red-600 hover:text-red-800">Logout</button>
                    </form>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                @if(session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                        <p>{{ session('success') }}</p>
                    </div>
                @endif
                
                @if($errors->any())
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
