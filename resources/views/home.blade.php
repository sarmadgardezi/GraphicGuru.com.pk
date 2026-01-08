@extends('layouts.app')

@section('content')
<div class="relative overflow-hidden bg-brand-black min-h-[90vh] flex flex-col justify-center">
    <!-- Hero Section -->
    <div class="relative z-10 w-full">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="text-left relative z-20">
                    <p class="text-brand-lime font-bold tracking-wider uppercase text-sm mb-6 pl-1 animate-fade-in-up">
                        The O.G. Subscription
                    </p>
                    <h1 class="text-6xl sm:text-7xl lg:text-8xl font-heading font-black tracking-tighter text-white mb-8 leading-[0.9] uppercase">
                        YOUR ULTIMATE <br>
                        CREATIVE PARTNER
                    </h1>
                    <p class="mt-4 text-xl sm:text-2xl text-gray-400 max-w-lg leading-relaxed font-light mb-10">
                        GraphicGuru is a subscription-based creative service platform with expert talent, smart systems and dedicated support.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-5">
                        <a href="#" class="flex items-center justify-center px-10 py-5 border border-transparent text-xl font-bold rounded-full text-black bg-brand-lime hover:bg-white transition-all transform hover:scale-105 shadow-[0_0_20px_rgba(223,255,0,0.3)]">
                            Get Started
                        </a>
                        <a href="#" class="flex items-center justify-center px-10 py-5 border-2 border-brand-lime text-xl font-bold rounded-full text-brand-lime hover:bg-brand-lime hover:text-black transition-all transform hover:scale-105">
                            How it works
                        </a>
                    </div>
                </div>

                <!-- Visual Content (Sliding Marquee) -->
                <div class="relative hidden lg:block h-[600px] overflow-hidden -mr-32 mask-gradient-left">
                    <!-- Gradient Mask to blend with background on the left -->
                    <div class="absolute inset-y-0 left-0 w-32 bg-gradient-to-r from-brand-black to-transparent z-10"></div>
                    
                    <div class="flex gap-6 absolute top-1/2 -translate-y-1/2 transform rotate-[-5deg] scale-110 opacity-80 hover:opacity-100 transition-opacity duration-500">
                        <!-- Marquee Row 1 (Top) -->
                        <div class="flex gap-6 animate-marquee">
                            <!-- Image Set 1 -->
                            <div class="w-72 h-96 rounded-2xl overflow-hidden flex-shrink-0 shadow-2xl border border-gray-800">
                                <img src="https://images.unsplash.com/photo-1626785774573-4b7993125651?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover">
                            </div>
                            <div class="w-72 h-96 rounded-2xl overflow-hidden flex-shrink-0 shadow-2xl border border-gray-800">
                                <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover">
                            </div>
                            <div class="w-72 h-96 rounded-2xl overflow-hidden flex-shrink-0 shadow-2xl border border-gray-800">
                                <img src="https://images.unsplash.com/photo-1558655146-d09347e0aa6c?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover">
                            </div>
                            <div class="w-72 h-96 rounded-2xl overflow-hidden flex-shrink-0 shadow-2xl border border-gray-800">
                                <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover">
                            </div>
                             <!-- Duplicate Image Set for seamless loop -->
                            <div class="w-72 h-96 rounded-2xl overflow-hidden flex-shrink-0 shadow-2xl border border-gray-800">
                                <img src="https://images.unsplash.com/photo-1626785774573-4b7993125651?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover">
                            </div>
                            <div class="w-72 h-96 rounded-2xl overflow-hidden flex-shrink-0 shadow-2xl border border-gray-800">
                                <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover">
                            </div>
                            <div class="w-72 h-96 rounded-2xl overflow-hidden flex-shrink-0 shadow-2xl border border-gray-800">
                                <img src="https://images.unsplash.com/photo-1558655146-d09347e0aa6c?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover">
                            </div>
                            <div class="w-72 h-96 rounded-2xl overflow-hidden flex-shrink-0 shadow-2xl border border-gray-800">
                                <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
             <!-- Mobile Visual Fallback -->
             <div class="mt-12 lg:hidden">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-gray-800">
                    <img class="w-full object-cover opacity-80" src="https://images.unsplash.com/photo-1626785774573-4b7993125651?auto=format&fit=crop&q=80&w=800" alt="App screenshot">
                     <div class="absolute inset-0 bg-gradient-to-t from-brand-black via-transparent to-transparent"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Trusted By Section -->
    <div class="mt-auto pt-8 pb-12 bg-brand-black relative z-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
             <div class="border-t border-white/10 pt-8">
                <p class="text-center sm:text-left text-sm font-semibold text-gray-400 mb-6 uppercase tracking-wider">
                    Trusted by the world's fastest growing startups
                </p>
                <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5 opacity-50 grayscale hover:grayscale-0 transition-all duration-500 hover:opacity-100">
                    <div class="col-span-1 flex justify-center items-center md:col-span-2 lg:col-span-1">
                        <span class="text-2xl font-heading font-bold text-white">Trainual</span>
                    </div>
                    <div class="col-span-1 flex justify-center items-center md:col-span-2 lg:col-span-1">
                         <span class="text-2xl font-mono font-bold text-white">PrograMetrix</span>
                    </div>
                    <div class="col-span-1 flex justify-center items-center md:col-span-2 lg:col-span-1">
                         <span class="text-2xl font-serif italic text-white">elm</span>
                    </div>
                    <div class="col-span-1 flex justify-center items-center md:col-span-3 lg:col-span-1">
                         <span class="text-2xl font-sans font-black text-white">Salesloft.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features Section (Dark Adapted) -->
<div class="py-24 bg-[#0a0a0a]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-16">
            <h2 class="text-base text-brand-lime font-bold tracking-wide uppercase">Services</h2>
            <p class="mt-2 text-4xl leading-8 font-heading font-black tracking-tight text-white sm:text-5xl">
                A BETTER WAY TO DESIGN
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
             <!-- Feature 1 -->
             <div class="p-8 bg-[#111] border border-white/5 rounded-2xl hover:border-brand-lime/50 transition-all group hover:-translate-y-1 duration-300">
                <div class="w-14 h-14 bg-brand-lime rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                     <svg class="h-7 w-7 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                </div>
                <h3 class="text-xl font-heading font-bold text-white mb-3">Global Reach</h3>
                <p class="text-gray-400 leading-relaxed">Our designs are crafted to appeal to a global audience with cultural nuance.</p>
             </div>

             <!-- Feature 2 -->
             <div class="p-8 bg-[#111] border border-white/5 rounded-2xl hover:border-brand-lime/50 transition-all group hover:-translate-y-1 duration-300">
                <div class="w-14 h-14 bg-brand-lime rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="h-7 w-7 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                    </svg>
                </div>
                <h3 class="text-xl font-heading font-bold text-white mb-3">Scalable Assets</h3>
                <p class="text-gray-400 leading-relaxed">Vector-based designs that scale perfectly from cards to billboards.</p>
             </div>

             <!-- Feature 3 -->
             <div class="p-8 bg-[#111] border border-white/5 rounded-2xl hover:border-brand-lime/50 transition-all group hover:-translate-y-1 duration-300">
                <div class="w-14 h-14 bg-brand-lime rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                     <svg class="h-7 w-7 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-heading font-bold text-white mb-3">Fast Turnaround</h3>
                <p class="text-gray-400 leading-relaxed">Get your designs delivered quickly without compromising on quality.</p>
             </div>

             <!-- Feature 4 -->
             <div class="p-8 bg-[#111] border border-white/5 rounded-2xl hover:border-brand-lime/50 transition-all group hover:-translate-y-1 duration-300">
                <div class="w-14 h-14 bg-brand-lime rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="h-7 w-7 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                </div>
                <h3 class="text-xl font-heading font-bold text-white mb-3">Mobile Interactions</h3>
                <p class="text-gray-400 leading-relaxed">Interface designs optimized for mobile experiences and touch.</p>
             </div>
        </div>
    </div>
</div>
@endsection
