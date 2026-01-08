<?php $__env->startSection('content'); ?>
    <div class="relative overflow-hidden bg-black min-h-[90vh] flex flex-col justify-center">
        <!-- Hero Section -->
        <div class="relative z-10 w-full pt-20">
            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-12 gap-12 items-center relative">

                    <!-- Text Content (Spans 7 columns) -->
                    <div class="lg:col-span-7 text-left relative z-20 pt-10 pb-10">
                        <p class="text-brand-lime font-bold tracking-widest uppercase text-xs mb-4 pl-1">
                            The O.G. Subscription
                        </p>
                        <h1
                            class="text-6xl sm:text-7xl lg:text-[5rem] font-heading font-black tracking-tighter text-white mb-6 leading-[0.85] uppercase">
                            Your Ultimate <br>
                            Creative Partner
                        </h1>
                        <p class="mt-4 text-xl text-gray-400 max-w-xl leading-relaxed font-light mb-10">
                            GraphicGuru is a subscription-based creative service platform with expert talent, smart systems
                            and dedicated support. We handle the design work so you can focus on strategy, growth and the
                            big picture.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#"
                                class="flex items-center justify-center px-8 py-4 text-black bg-brand-lime font-bold rounded-full text-lg hover:bg-white transition-colors">
                                Get Started
                            </a>
                            <a href="#"
                                class="flex items-center justify-center px-8 py-4 text-brand-lime border border-brand-lime font-bold rounded-full text-lg hover:bg-brand-lime hover:text-black transition-colors">
                                How it works
                            </a>
                        </div>
                    </div>

                    <!-- Visual Content (Sliding Marquee) - Absolute on large screens to bleed right -->
                    <div
                        class="lg:absolute lg:right-[-10%] lg:top-1/2 lg:-translate-y-1/2 lg:w-3/5 h-[800px] overflow-hidden hidden lg:block pointer-events-none">
                        <div class="h-full w-full relative group">
                            <!-- Gradient Mask to blend with background on the left -->
                            <div
                                class="absolute inset-y-0 left-0 w-64 bg-gradient-to-r from-black via-black/80 to-transparent z-20">
                            </div>

                            <div
                                class="flex gap-6 absolute top-1/2 -translate-y-1/2 opacity-90 transition-opacity duration-500">
                                <!-- Marquee Row -->
                                <div class="flex gap-6 animate-marquee">
                                    <!-- Tall Card 1 -->
                                    <div class="w-80 h-[500px] rounded-2xl overflow-hidden flex-shrink-0 relative">
                                        <img src="https://images.unsplash.com/photo-1595166649721-e3743be04f4a?auto=format&fit=crop&q=80&w=600"
                                            class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-black/10"></div>
                                    </div>
                                    <!-- Tall Card 2 -->
                                    <div class="w-80 h-[500px] rounded-2xl overflow-hidden flex-shrink-0 relative">
                                        <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&q=80&w=600"
                                            class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-black/10"></div>
                                    </div>
                                    <!-- Tall Card 3 -->
                                    <div class="w-80 h-[500px] rounded-2xl overflow-hidden flex-shrink-0 relative">
                                        <img src="https://images.unsplash.com/photo-1534670007418-fbb7f6cf32c3?auto=format&fit=crop&q=80&w=600"
                                            class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-black/10"></div>
                                    </div>
                                    <!-- Tall Card 4 -->
                                    <div class="w-80 h-[500px] rounded-2xl overflow-hidden flex-shrink-0 relative">
                                        <img src="https://images.unsplash.com/photo-1550942541-b4f0b0949216?auto=format&fit=crop&q=80&w=600"
                                            class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-black/10"></div>
                                    </div>
                                    <!-- Duplicates for loop -->
                                    <div class="w-80 h-[500px] rounded-2xl overflow-hidden flex-shrink-0 relative">
                                        <img src="https://images.unsplash.com/photo-1595166649721-e3743be04f4a?auto=format&fit=crop&q=80&w=600"
                                            class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-black/10"></div>
                                    </div>
                                    <div class="w-80 h-[500px] rounded-2xl overflow-hidden flex-shrink-0 relative">
                                        <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&q=80&w=600"
                                            class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-black/10"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Visual Fallback -->
                <div class="mt-12 lg:hidden">
                    <div class="relative rounded-2xl overflow-hidden aspect-[4/5] border border-gray-800">
                        <img class="w-full h-full object-cover opacity-80"
                            src="https://images.unsplash.com/photo-1595166649721-e3743be04f4a?auto=format&fit=crop&q=80&w=800"
                            alt="Creative work">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trusted By Section -->
        <div class="mt-auto pt-8 pb-12 bg-brand-black relative z-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="border-t border-white/10 pt-8">
                    <p class="text-left text-lg font-semibold text-white mb-8 tracking-wide">
                        Trusted by the world's fastest growing startups and established brands.
                    </p>

                    <div class="relative w-full overflow-hidden group">
                        <!-- Gradient masks for smooth fade -->
                        <div
                            class="absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-brand-black to-transparent z-10">
                        </div>
                        <div
                            class="absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-brand-black to-transparent z-10">
                        </div>

                        <div class="flex whitespace-nowrap group-hover:[animation-play-state:paused]">
                            <!-- Marquee Content (Repeated twice for seamless loop) -->
                            <div class="flex items-center space-x-16 animate-marquee">
                                <!-- Logo 1: 7-Eleven Style -->
                                <div
                                    class="flex items-center justify-center opacity-60 hover:opacity-100 transition-all duration-300 hover:scale-110 cursor-pointer">
                                    <span class="text-3xl font-black text-white font-sans tracking-tight">7<span
                                            class="text-brand-lime">ELEVEn</span></span>
                                </div>
                                <!-- Logo 2: Meltwater Style -->
                                <div
                                    class="flex items-center justify-center opacity-60 hover:opacity-100 transition-all duration-300 hover:scale-110 cursor-pointer">
                                    <span class="text-2xl font-bold text-white font-mono flex items-center gap-2">
                                        <span class="text-3xl text-brand-lime">&lt;O&gt;</span> Meltwater
                                    </span>
                                </div>
                                <!-- Logo 3: Yahoo Style -->
                                <div
                                    class="flex items-center justify-center opacity-60 hover:opacity-100 transition-all duration-300 hover:scale-110 cursor-pointer">
                                    <span class="text-3xl font-black italic text-white font-serif">yahoo<span
                                            class="text-brand-lime">!</span></span>
                                </div>
                                <!-- Logo 4: SproutSocial Style -->
                                <div
                                    class="flex items-center justify-center opacity-60 hover:opacity-100 transition-all duration-300 hover:scale-110 cursor-pointer">
                                    <span class="text-2xl font-bold text-white font-sans tracking-tight">sprout<span
                                            class="font-light">social</span></span>
                                </div>
                                <!-- Logo 5: Trainual Style -->
                                <div
                                    class="flex items-center justify-center opacity-60 hover:opacity-100 transition-all duration-300 hover:scale-110 cursor-pointer">
                                    <span class="text-3xl font-heading font-black text-white cursive">Trainual</span>
                                </div>
                                <!-- Logo 6: PrograMetrix Style -->
                                <div
                                    class="flex items-center justify-center opacity-60 hover:opacity-100 transition-all duration-300 hover:scale-110 cursor-pointer">
                                    <span class="text-xl font-mono text-white tracking-widest uppercase">PrograMetrix</span>
                                </div>
                                <!-- Spacer to ensure smooth gap -->
                                <div class="w-8"></div>
                            </div>

                            <!-- Duplicate for Loop -->
                            <div class="flex items-center space-x-16 animate-marquee" aria-hidden="true">
                                <!-- Logo 1 -->
                                <div
                                    class="flex items-center justify-center opacity-60 hover:opacity-100 transition-all duration-300 hover:scale-110 cursor-pointer">
                                    <span class="text-3xl font-black text-white font-sans tracking-tight">7<span
                                            class="text-brand-lime">ELEVEn</span></span>
                                </div>
                                <!-- Logo 2 -->
                                <div
                                    class="flex items-center justify-center opacity-60 hover:opacity-100 transition-all duration-300 hover:scale-110 cursor-pointer">
                                    <span class="text-2xl font-bold text-white font-mono flex items-center gap-2">
                                        <span class="text-3xl text-brand-lime">&lt;O&gt;</span> Meltwater
                                    </span>
                                </div>
                                <!-- Logo 3 -->
                                <div
                                    class="flex items-center justify-center opacity-60 hover:opacity-100 transition-all duration-300 hover:scale-110 cursor-pointer">
                                    <span class="text-3xl font-black italic text-white font-serif">yahoo<span
                                            class="text-brand-lime">!</span></span>
                                </div>
                                <!-- Logo 4 -->
                                <div
                                    class="flex items-center justify-center opacity-60 hover:opacity-100 transition-all duration-300 hover:scale-110 cursor-pointer">
                                    <span class="text-2xl font-bold text-white font-sans tracking-tight">sprout<span
                                            class="font-light">social</span></span>
                                </div>
                                <!-- Logo 5 -->
                                <div
                                    class="flex items-center justify-center opacity-60 hover:opacity-100 transition-all duration-300 hover:scale-110 cursor-pointer">
                                    <span class="text-3xl font-heading font-black text-white cursive">Trainual</span>
                                </div>
                                <!-- Logo 6 -->
                                <div
                                    class="flex items-center justify-center opacity-60 hover:opacity-100 transition-all duration-300 hover:scale-110 cursor-pointer">
                                    <span class="text-xl font-mono text-white tracking-widest uppercase">PrograMetrix</span>
                                </div>
                                <!-- Spacer -->
                                <div class="w-8"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bento Grid Benefits Section -->
    <div class="py-24 bg-brand-black relative">
        <!-- Top Dashed Line -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-px h-24 border-l border-dashed border-white/20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12">
            <!-- Section Header -->
            <div class="text-center mb-20 relative z-10">
                <p class="text-brand-lime font-bold tracking-[0.2em] uppercase text-xs sm:text-sm mb-6">
                    Human Creativity Supported by AI
                </p>
                <h2
                    class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-heading font-black text-white uppercase leading-[0.85] tracking-tighter">
                    Real Minds, Smart <br>
                    Tools, Exceptional <br>
                    Design
                </h2>
            </div>

            <!-- Bento Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <!-- Column 1: Feature Image (Spans vertical space) -->
                <div
                    class="lg:col-span-1 bg-[#111] border border-white/10 rounded-2xl p-8 flex flex-col group hover:border-brand-lime/50 transition-colors duration-300 relative overflow-hidden">
                    <!-- Image Container with Graphic Elements -->
                    <div class="relative flex-grow min-h-[300px] mb-8 flex items-end justify-center">
                        <!-- Yellow Blob Background -->
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?fit=crop&w=600&h=600&q=80"
                            class="relative z-10 w-48 h-48 rounded-full object-cover border-4 border-[#111] grayscale group-hover:grayscale-0 transition-all duration-500"
                            alt="Creative Team Member">

                        <!-- Decor elements similar to image -->
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#111] z-20 h-full w-full"></div>

                        <!-- Floating Platform Icons -->
                        <div class="absolute bottom-0 w-full z-30 flex justify-center gap-4 mb-2">
                            <div
                                class="w-10 h-10 bg-[#222] rounded-lg border border-white/10 flex items-center justify-center text-white font-bold text-lg">
                                Fi</div>
                            <div
                                class="w-10 h-10 bg-[#222] rounded-lg border border-white/10 flex items-center justify-center">
                                <!-- OpenAI/Chat icon -->
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M22.28 9.27c-.22-.64-.54-1.24-.95-1.78-.4-.54-.9-.99-1.46-1.33l-1.05-.62a1.006 1.006 0 0 0-.25-.09l-1.07-.38c.64-.22 1.24-.54 1.78-.95.54-.4.99-.9 1.33-1.46l.62-1.07a8.99 8.99 0 0 0 .1-2.92l-.56 1.37c-.33 1.04-.94 1.95-1.75 2.65-.81.69-1.8 1.13-2.86 1.25l-1.45.16c.39-.56.88-1.04 1.45-1.42 1.07-.72 2.37-1.09 3.69-1.01l-1.37.56c-1.04.33-1.95.94-2.65 1.75-.69.81-1.13 1.8-1.25 2.86l-.16 1.45c.56-.39 1.04-.88 1.42-1.45.72-1.07 1.09-2.37 1.01-3.69l-.56 1.37c-.33 1.04-.94 1.95-1.75 2.65-.81.69-1.8 1.13-2.86 1.25L9.27 1.72c.64.22 1.24.54 1.78.95.54.4.99.9 1.33 1.46l.62 1.07a8.99 8.99 0 0 1-.1 2.92l.56-1.37c.33-1.04.94-1.95 1.75-2.65.81-.69 1.8-1.13 2.86-1.25l1.45-.16c-.39.56-.88 1.04-1.45 1.42-1.07.72-2.37 1.09-3.69 1.01l1.37-.56c1.04-.33 1.95-.94 2.65-1.75.69-.81 1.13-1.8 1.25-2.86l.16-1.45c-.56.39-1.04.88-1.42 1.45-.72 1.07-1.09 2.37-1.01 3.69l.56-1.37c.33-1.04.94-1.95 1.75-2.65.81-.69 1.8-1.13 2.86-1.25l1.05-.62c.56-.33 1.07-.77 1.46-1.33.4-.54.72-1.14.95-1.78l.38-1.07c-.31 1.07-.8 2.07-1.44 2.95z" />
                                </svg>
                            </div>
                            <div
                                class="w-10 h-10 bg-[#222] rounded-lg border border-white/10 flex items-center justify-center">
                                <!-- Midjourney/AI icon equivalent -->
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                    </path>
                                </svg>
                            </div>
                            <div
                                class="w-10 h-10 bg-[#222] rounded-lg border border-white/10 flex items-center justify-center">
                                <!-- Triangle/Design icon -->
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <h3 class="text-2xl font-heading font-bold text-white mb-2 ml-1">Quality guaranteed by talent and
                        process</h3>
                    <p class="text-gray-400 text-sm leading-relaxed ml-1">Vetted creatives supported by processes and AI
                        tools to deliver every time.</p>
                </div>

                <!-- Column 2: Center Items -->
                <div class="lg:col-span-1 flex flex-col gap-6">
                    <!-- Item 1 -->
                    <div
                        class="bg-[#111] border border-white/10 rounded-2xl p-8 flex-1 group hover:border-brand-lime/50 transition-colors duration-300">
                        <div
                            class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center mb-6 group-hover:border-brand-lime group-hover:text-brand-lime text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-heading font-bold text-white mb-3">Spin up a creative team fast</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Low complexity to build from scratch or plug into
                            your current team.</p>
                    </div>

                    <!-- Item 2 -->
                    <div
                        class="bg-[#111] border border-white/10 rounded-2xl p-8 flex-1 group hover:border-brand-lime/50 transition-colors duration-300">
                        <div
                            class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center mb-6 group-hover:border-brand-lime group-hover:text-brand-lime text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-heading font-bold text-white mb-3">Transparent pricing</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Build a subscription that matches your current
                            demands.</p>
                    </div>
                </div>

                <!-- Column 3: Right Items -->
                <div class="lg:col-span-1 flex flex-col gap-6">
                    <!-- Item 1 -->
                    <div
                        class="bg-[#111] border border-white/10 rounded-2xl p-8 flex-1 group hover:border-brand-lime/50 transition-colors duration-300">
                        <div
                            class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center mb-6 group-hover:border-brand-lime group-hover:text-brand-lime text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-heading font-bold text-white mb-3">Reliable turnarounds</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Average 24-hour first drafts, handled with
                            consistency and care.</p>
                    </div>

                    <!-- Item 2 -->
                    <div
                        class="bg-[#111] border border-white/10 rounded-2xl p-8 flex-1 group hover:border-brand-lime/50 transition-colors duration-300">
                        <div
                            class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center mb-6 group-hover:border-brand-lime group-hover:text-brand-lime text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-heading font-bold text-white mb-3">Human support, always on</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Never get stuck on a request. Our support team is
                            here 24/5 to support you and your success.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Metrics Section -->
    <div class="py-24 bg-[#F3F3F3] border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-20">
                <p class="text-xs font-bold tracking-[0.2em] text-gray-500 uppercase mb-4">The Return You Want</p>
                <h2 class="text-5xl sm:text-6xl font-heading font-black text-black uppercase tracking-tighter">
                    What Our Clients Achieve
                </h2>
                <p class="mt-4 text-gray-600 max-w-2xl text-sm leading-relaxed">
                    Every metric reflects a client advancing their brand with our partnership. Here's what they've
                    accomplished.
                </p>
            </div>

            <!-- Metric Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-x-20 gap-y-16 mb-24">
                <!-- Row 1 -->
                <div class="border-b border-dashed border-gray-300 pb-8">
                    <div class="text-7xl sm:text-8xl font-black text-blue-600 font-heading mb-6 tracking-tighter">
                        $100K</div>
                    <p class="text-black text-base font-medium leading-relaxed">Customer-reported average annual
                        savings on design services after switching to GraphicGuru.</p>
                </div>
                <div class="border-b border-dashed border-gray-300 pb-8">
                    <div class="text-7xl sm:text-8xl font-black text-brand-lime font-heading mb-6 tracking-tighter">2X
                    </div>
                    <p class="text-black text-base font-medium leading-relaxed">Faster than the average agency.
                        Customers receive first drafts in 24 hours, while most agencies take 2-3 days.</p>
                </div>
                <!-- Row 2 -->
                <div class="border-b border-dashed border-gray-300 pb-8">
                    <div class="text-7xl sm:text-8xl font-black text-blue-600 font-heading mb-6 tracking-tighter">3X
                    </div>
                    <p class="text-black text-base font-medium leading-relaxed">On average, customers triple their
                        creative production with a GraphicGuru subscription.</p>
                </div>
                <div class="border-b border-dashed border-gray-300 pb-8">
                    <div class="text-7xl sm:text-8xl font-black text-blue-600 font-heading mb-6 tracking-tighter">94%
                    </div>
                    <p class="text-black text-base font-medium leading-relaxed">Customers choose GraphicGuru as their #1
                        design solution for more than 18 months on average.</p>
                </div>
            </div>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="relative h-96 rounded-2xl overflow-hidden group border border-white/10">
                    <img src="https://images.unsplash.com/photo-1587829741301-dc798b91a91e?auto=format&fit=crop&q=80&w=600"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0 opacity-60 group-hover:opacity-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent z-10 opacity-90">
                    </div>
                    <div class="absolute bottom-8 left-8 right-8 z-20">
                        <div class="text-6xl font-black text-white font-heading mb-2 tracking-tighter">3M<sup
                                class="text-4xl">+</sup></div>
                        <p class="text-gray-400 text-sm uppercase tracking-wider font-bold">Designs created for our
                            customers</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative h-96 rounded-2xl overflow-hidden group border border-white/10">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=600"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0 opacity-60 group-hover:opacity-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent z-10 opacity-90">
                    </div>
                    <div class="absolute bottom-8 left-8 right-8 z-20">
                        <div class="text-6xl font-black text-white font-heading mb-2 tracking-tighter">320<sup
                                class="text-4xl">+</sup></div>
                        <p class="text-gray-400 text-sm uppercase tracking-wider font-bold">Creatives and art directors
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative h-96 rounded-2xl overflow-hidden group border border-white/10">
                    <img src="https://images.unsplash.com/photo-1531583692026-663d21f84149?auto=format&fit=crop&q=80&w=600"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent z-10">
                    </div>
                    <!-- Rating Content -->
                    <div class="absolute bottom-0 w-full bg-[#111] p-8 border-t border-white/10 z-20">
                        <div class="flex gap-1 text-brand-lime mb-3">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <div class="text-5xl font-black text-white font-heading tracking-tighter">4.8/5<sup
                                class="text-3xl text-brand-lime ml-2">*</sup></div>
                        <p class="text-gray-400 text-xs uppercase tracking-wider font-bold mt-2">Customer satisfaction
                            rate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/sarmadgardezi/Documents/GitHub/GraphicGuru.com.pk/resources/views/home.blade.php ENDPATH**/ ?>