<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GraphicGuru - Creative Design Solutions</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=outfit:400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        <style type="text/tailwindcss">
            @theme {
                    --font-sans: 'Outfit', sans-serif;
                    --color-primary: #6366f1;
                    --color-primary-dark: #4f46e5;
                }
            </style>
    @endif
</head>

<body class="bg-gray-50 text-slate-800 font-sans antialiased">

    <!-- Header -->
    <header
        class="fixed w-full top-0 z-50 transition-all duration-300 bg-white/80 backdrop-blur-md border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-2 group">
                <div
                    class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg group-hover:bg-indigo-700 transition-colors">
                    G
                </div>
                <span
                    class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-violet-600">
                    GraphicGuru
                </span>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="#" class="text-sm font-medium hover:text-indigo-600 transition-colors">Home</a>
                <a href="#" class="text-sm font-medium hover:text-indigo-600 transition-colors">Services</a>
                <a href="#" class="text-sm font-medium hover:text-indigo-600 transition-colors">Portfolio</a>
                <a href="#" class="text-sm font-medium hover:text-indigo-600 transition-colors">Contact</a>
                <a href="#"
                    class="px-5 py-2.5 bg-indigo-600 text-white text-sm font-semibold rounded-full hover:bg-indigo-700 transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    Get Started
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <button class="md:hidden p-2 text-slate-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex flex-col lg:flex-row pt-20 overflow-hidden">

        <!-- Left Content -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 lg:p-16 xl:p-24 relative z-10 bg-white">
            <div class="max-w-xl space-y-8 animate-fade-in-up">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-50 border border-indigo-100 text-indigo-600 text-xs font-semibold tracking-wide uppercase">
                    <span class="w-2 h-2 rounded-full bg-indigo-600 animate-pulse"></span>
                    Available for projects
                </div>

                <h1 class="text-5xl lg:text-7xl font-extrabold leading-tight tracking-tight text-slate-900">
                    We Craft <br />
                    <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 animate-gradient-x">
                        Digital Experiences
                    </span>
                </h1>

                <p class="text-lg text-slate-600 leading-relaxed max-w-md">
                    Elevate your brand with stunning visuals, user-centric design, and digital strategies that drive
                    real results.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 pt-2">
                    <a href="#"
                        class="inline-flex items-center justify-center px-8 py-4 bg-slate-900 text-white font-semibold rounded-full hover:bg-slate-800 transition-all hover:scale-105 shadow-xl">
                        View Portfolio
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                    <a href="#"
                        class="inline-flex items-center justify-center px-8 py-4 bg-white text-slate-900 border border-slate-200 font-semibold rounded-full hover:bg-gray-50 hover:border-slate-300 transition-all">
                        Our Services
                    </a>
                </div>

                <div class="flex items-center gap-4 pt-8 border-t border-gray-100">
                    <div class="flex -space-x-3">
                        <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=1"
                            alt="User">
                        <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=2"
                            alt="User">
                        <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=3"
                            alt="User">
                        <div
                            class="w-10 h-10 rounded-full border-2 border-white bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-600">
                            +2k</div>
                    </div>
                    <div>
                        <div class="flex gap-1 text-yellow-400 text-sm">
                            ★★★★★
                        </div>
                        <p class="text-xs text-slate-500 font-medium">Trusted by global brands</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Slider -->
        <div class="w-full lg:w-1/2 h-[50vh] lg:h-auto relative bg-slate-100 overflow-hidden group">
            <div id="slider" class="flex h-full transition-transform duration-700 ease-in-out will-change-transform">
                <!-- Slide 1 -->
                <div class="min-w-full h-full relative">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop"
                        class="w-full h-full object-cover" alt="Creative Workspace">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-12">
                        <div class="text-white transform translate-y-4 opacity-0 animate-slide-up">
                            <h3 class="text-2xl font-bold">Creative Strategy</h3>
                            <p class="text-white/80">Building brands that matter.</p>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="min-w-full h-full relative">
                    <img src="https://images.unsplash.com/photo-1558655146-50971075e412?q=80&w=2070&auto=format&fit=crop"
                        class="w-full h-full object-cover" alt="Design Process">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-12">
                        <div class="text-white">
                            <h3 class="text-2xl font-bold">UI/UX Design</h3>
                            <p class="text-white/80">Intuitive interfaces for modern users.</p>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="min-w-full h-full relative">
                    <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?q=80&w=2500&auto=format&fit=crop"
                        class="w-full h-full object-cover" alt="Digital Marketing">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-12">
                        <div class="text-white">
                            <h3 class="text-2xl font-bold">Growth Marketing</h3>
                            <p class="text-white/80">Data-driven campaigns.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Controls -->
            <button id="prevBtn"
                class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/10 backdrop-blur-md border border-white/20 rounded-full flex items-center justify-center text-white hover:bg-white hover:text-slate-900 transition-all opacity-0 group-hover:opacity-100 transform -translate-x-4 group-hover:translate-x-0 duration-300 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>
            <button id="nextBtn"
                class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/10 backdrop-blur-md border border-white/20 rounded-full flex items-center justify-center text-white hover:bg-white hover:text-slate-900 transition-all opacity-0 group-hover:opacity-100 transform translate-x-4 group-hover:translate-x-0 duration-300 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>

            <!-- Indicators -->
            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2">
                <button class="w-2 h-2 rounded-full bg-white transition-all indicator active cursor-pointer"
                    data-index="0"></button>
                <button class="w-2 h-2 rounded-full bg-white/50 hover:bg-white transition-all indicator cursor-pointer"
                    data-index="1"></button>
                <button class="w-2 h-2 rounded-full bg-white/50 hover:bg-white transition-all indicator cursor-pointer"
                    data-index="2"></button>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slider = document.getElementById('slider');
            const slides = slider.children;
            const indicators = document.querySelectorAll('.indicator');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const textOverlays = document.querySelectorAll('.animate-slide-up');
            let currentIndex = 0;
            const totalSlides = slides.length;
            const intervalTime = 5000;
            let autoSlideInterval;

            function updateSlider() {
                slider.style.transform = `translateX(-${currentIndex * 100}%)`;
                indicators.forEach((ind, i) => {
                    if (i === currentIndex) {
                        ind.classList.remove('bg-white/50');
                        ind.classList.add('bg-white', 'w-8');
                    } else {
                        ind.classList.add('bg-white/50');
                        ind.classList.remove('bg-white', 'w-8');
                    }
                });

                // Reset animation for text
                // A simple way to re-trigger animation could be adding removing class, but for now we keep it simple
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateSlider();
            }

            function prevSlide() {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                updateSlider();
            }

            function startAutoSlide() {
                autoSlideInterval = setInterval(nextSlide, intervalTime);
            }

            function resetAutoSlide() {
                clearInterval(autoSlideInterval);
                startAutoSlide();
            }

            nextBtn.addEventListener('click', () => {
                nextSlide();
                resetAutoSlide();
            });

            prevBtn.addEventListener('click', () => {
                prevSlide();
                resetAutoSlide();
            });

            indicators.forEach(ind => {
                ind.addEventListener('click', (e) => {
                    currentIndex = parseInt(e.target.getAttribute('data-index'));
                    updateSlider();
                    resetAutoSlide();
                });
            });

            startAutoSlide();
            // Initial update
            updateSlider();
        });
    </script>
</body>

</html>