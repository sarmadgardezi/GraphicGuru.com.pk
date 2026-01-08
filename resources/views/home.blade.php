@extends('layouts.app')

@section('content')
<div class="relative overflow-hidden bg-brand-black">
    <!-- Hero Section -->
    <div class="relative z-10 pt-16 pb-20 lg:pb-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="text-left">
                    <p class="text-brand-lime font-bold tracking-wider uppercase text-sm mb-4">
                        The O.G. Subscription
                    </p>
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black tracking-tight text-white mb-6 leading-none">
                        YOUR ULTIMATE <br>
                        CREATIVE PARTNER
                    </h1>
                    <p class="mt-4 text-xl text-gray-400 max-w-lg leading-relaxed">
                        GraphicGuru is a subscription-based creative service platform with expert talent, smart systems and dedicated support. We handle the design work so you can focus on strategy, growth and the big picture.
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row gap-4">
                        <a href="#" class="flex items-center justify-center px-8 py-4 border border-transparent text-lg font-bold rounded-full text-black bg-brand-lime hover:bg-white transition-all transform hover:scale-105">
                            Get Started
                        </a>
                        <a href="#" class="flex items-center justify-center px-8 py-4 border border-brand-lime text-lg font-bold rounded-full text-brand-lime hover:bg-brand-lime hover:text-black transition-all transform hover:scale-105">
                            How it works
                        </a>
                    </div>
                </div>

                <!-- Visual Content (Collage Simulation) -->
                <div class="relative hidden lg:block h-[600px]">
                    <div class="absolute top-0 right-0 w-80 h-96 bg-gray-800 rounded-2xl overflow-hidden transform rotate-3 shadow-2xl border border-gray-700 z-10">
                        <img src="https://images.unsplash.com/photo-1626785774573-4b7993125651?auto=format&fit=crop&q=80&w=800" alt="Creative work" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity">
                        <div class="absolute bottom-4 left-4 text-white font-bold text-2xl">GROVI</div>
                    </div>
                    <div class="absolute bottom-10 right-20 w-72 h-80 bg-gray-900 rounded-2xl overflow-hidden transform -rotate-6 shadow-2xl border border-gray-800 z-0">
                         <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&q=80&w=800" alt="Dark abstract" class="w-full h-full object-cover opacity-60">
                    </div>
                    <div class="absolute top-20 right-60 w-64 h-64 bg-gray-800 rounded-2xl overflow-hidden transform rotate-6 shadow-2xl border border-gray-700 -z-10">
                          <img src="https://images.unsplash.com/photo-1558655146-d09347e0aa6c?auto=format&fit=crop&q=80&w=800" alt="Design process" class="w-full h-full object-cover opacity-50">
                    </div>
                </div>
            </div>
            
             <!-- Mobile Visual Fallback -->
             <div class="mt-10 lg:hidden">
                <img class="w-full rounded-xl shadow-2xl opacity-90" src="https://images.unsplash.com/photo-1626785774573-4b7993125651?auto=format&fit=crop&q=80&w=800" alt="App screenshot">
            </div>
        </div>
    </div>

    <!-- Trusted By Section -->
    <div class="pb-16 bg-brand-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center sm:text-left text-lg font-semibold text-white mb-8">
                Trusted by the world's fastest growing startups and established brands.
            </p>
            <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                    <span class="text-2xl font-bold text-white font-serif">Trainual</span>
                </div>
                <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                     <span class="text-2xl font-bold text-white font-mono">PrograMetrix</span>
                </div>
                <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                     <span class="text-2xl font-bold text-white italic">elm</span>
                </div>
                <div class="col-span-1 flex justify-center md:col-span-3 lg:col-span-1">
                     <span class="text-2xl font-bold text-white">Salesloft.</span>
                </div>
                <div class="col-span-2 flex justify-center md:col-span-3 lg:col-span-1">
                     <span class="text-2xl font-bold text-white">amazon</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features Section (Dark Adapted) -->
<div class="py-20 bg-[#121212] border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-16">
            <h2 class="text-base text-brand-lime font-bold tracking-wide uppercase">Services</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                A better way to design
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
             <div class="p-6 bg-brand-black border border-gray-800 rounded-xl hover:border-brand-lime transition-colors group">
                <div class="w-12 h-12 bg-brand-lime rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                     <svg class="h-6 w-6 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Global Reach</h3>
                <p class="text-gray-400">Our designs are crafted to appeal to a global audience.</p>
             </div>

             <div class="p-6 bg-brand-black border border-gray-800 rounded-xl hover:border-brand-lime transition-colors group">
                <div class="w-12 h-12 bg-brand-lime rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <svg class="h-6 w-6 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Scalable Assets</h3>
                <p class="text-gray-400">Vector-based designs that scale perfectly.</p>
             </div>

             <div class="p-6 bg-brand-black border border-gray-800 rounded-xl hover:border-brand-lime transition-colors group">
                <div class="w-12 h-12 bg-brand-lime rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                     <svg class="h-6 w-6 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Fast Turnaround</h3>
                <p class="text-gray-400">Get your designs delivered quickly.</p>
             </div>

             <div class="p-6 bg-brand-black border border-gray-800 rounded-xl hover:border-brand-lime transition-colors group">
                <div class="w-12 h-12 bg-brand-lime rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <svg class="h-6 w-6 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Mobile Interactions</h3>
                <p class="text-gray-400">Interface designs optimized for mobile experiences.</p>
             </div>
        </div>
    </div>
</div>
@endsection
