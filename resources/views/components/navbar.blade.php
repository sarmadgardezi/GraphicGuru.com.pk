<nav x-data="{ open: false }" class="bg-brand-black border-b border-white/10 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ url('/') }}" class="text-3xl font-black italic tracking-tighter text-brand-lime hover:scale-105 transition-transform uppercase">
                        GraphicGuru
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:ml-12 sm:flex">
                    <a href="{{ url('/') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-white hover:text-brand-lime transition duration-150 ease-in-out">
                        Solutions & Services
                    </a>
                    <a href="#" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-white hover:text-brand-lime transition duration-150 ease-in-out">
                        Platform
                    </a>
                    <a href="#" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-white hover:text-brand-lime transition duration-150 ease-in-out">
                        Pricing
                    </a>
                    <a href="#" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-white hover:text-brand-lime transition duration-150 ease-in-out">
                        Resources
                    </a>
                    <a href="#" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-white hover:text-brand-lime transition duration-150 ease-in-out">
                        Why GG
                    </a>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-6">
                <!-- Search Icon (Mock) -->
                <button class="text-white hover:text-brand-lime">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
                
                <a href="#" class="text-sm font-medium text-white hover:text-brand-lime">
                    Sign In
                </a>

                <a href="#" class="px-5 py-2.5 text-sm font-bold text-black bg-brand-lime rounded-full hover:bg-white hover:text-black transition-all transform hover:scale-105">
                    Book a demo
                </a>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-brand-black border-t border-gray-800 transition">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ url('/') }}" class="block w-full pl-3 pr-4 py-2 text-left text-base font-medium text-brand-lime bg-gray-900 border-l-4 border-brand-lime focus:outline-none transition duration-150 ease-in-out">
                Home
            </a>
            <a href="#" class="block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 hover:border-gray-300 focus:outline-none transition duration-150 ease-in-out">
                 Solutions
            </a>
            <a href="#" class="block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 hover:border-gray-300 focus:outline-none transition duration-150 ease-in-out">
                 Pricing
            </a>
            <div class="px-4 py-4 mt-4 border-t border-gray-800">
                <a href="#" class="block w-full text-center px-4 py-3 text-base font-bold text-black bg-brand-lime rounded-full">
                    Book a demo
                </a>
            </div>
        </div>
    </div>
</nav>
