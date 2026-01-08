<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Primary Meta Tags -->
    <title>Graphics Guru - Download Great Designs & Graphics for Free</title>
    <meta name="title" content="Graphics Guru - Download Great Designs & Graphics for Free">
    <meta name="description"
        content="Daily source of Assets for Graphic Designers. All Assets are 100% free. No redirections. No registration required.">
    <meta name="keywords"
        content="graphic design, free assets, design resources, templates, vectors, mockups, creative, design tool">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Graphics Guru - Download Great Designs & Graphics for Free">
    <meta property="og:description"
        content="Daily source of Assets for Graphic Designers. All Assets are 100% free. No redirections. No registration required.">
    <meta property="og:image"
        content="https://images.unsplash.com/photo-1626785774573-4b7993125651?auto=format&fit=crop&q=80&w=1200">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Graphics Guru - Download Great Designs & Graphics for Free">
    <meta property="twitter:description"
        content="Daily source of Assets for Graphic Designers. All Assets are 100% free. No redirections. No registration required.">
    <meta property="twitter:image"
        content="https://images.unsplash.com/photo-1626785774573-4b7993125651?auto=format&fit=crop&q=80&w=1200">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "WebSite",
      "name": "Graphics Guru",
      "url": "{{ url('/') }}",
      "description": "Daily source of Assets for Graphic Designers. All Assets are 100% free. No redirections. No registration required.",
      "potentialAction": {
        "@@type": "SearchAction",
        "target": "{{ url('/') }}/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            lime: '#dfff00', // The bright lime/yellow from the reference
                            black: '#0a0a0a',
                            dark: '#121212'
                        }
                    },
                    fontFamily: {
                        sans: ['Instrument Sans', 'sans-serif'],
                        heading: ['"Bricolage Grotesque"', 'sans-serif'],
                    },
                    animation: {
                        'marquee': 'marquee 25s linear infinite',
                        'marquee-reverse': 'marquee-reverse 25s linear infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-100%)' },
                        },
                        'marquee-reverse': {
                            '0%': { transform: 'translateX(-100%)' },
                            '100%': { transform: 'translateX(0%)' },
                        },
                    },
                }
            }
        }
    </script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Dark Mode Script -->
    <script>
        // Force dark mode logic or just default to dark for this design
        document.documentElement.classList.add('dark');
    </script>
</head>

<body class="font-sans antialiased bg-brand-black text-white selection:bg-brand-lime selection:text-black">
    <div class="min-h-screen flex flex-col">
        @include('components.navbar')

        <main class="flex-grow">
            @yield('content')
        </main>

        <footer class="bg-brand-black text-white border-t border-white/10 mt-auto font-sans">
            <!-- Newsletter & Socials Section -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 border-b border-white/10">
                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-8">
                    <!-- Newsletter -->
                    <div>
                        <h3 class="font-bold text-sm mb-1">Subscribe to the cookbook</h3>
                        <p class="text-gray-400 text-xs mb-4">We'll send creative recipes and product updates your way.
                        </p>
                        <form class="flex gap-2">
                            <input type="email" placeholder="Business email"
                                class="bg-[#111] border border-white/20 rounded-full py-2 px-4 text-sm text-white focus:outline-none focus:border-brand-lime w-64">
                            <button type="submit"
                                class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-black transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </form>
                    </div>

                    <!-- Badges & Socials -->
                    <div class="flex flex-col sm:flex-row items-center gap-8">
                        <!-- Trust Badges (Mockups) -->
                        <div class="flex gap-4 grayscale opacity-70">
                            <div class="h-10 w-16 bg-white/10 rounded"></div>
                            <div class="h-10 w-10 bg-white/10 rounded"></div>
                            <div class="h-10 w-10 bg-white/10 rounded"></div>
                        </div>

                        <!-- Social Icons -->
                        <div class="flex gap-4">
                            <span class="text-xs text-gray-500 uppercase tracking-widest mr-2 mt-1">Follow us</span>
                            <a href="#"
                                class="w-8 h-8 bg-white text-black rounded-full flex items-center justify-center hover:bg-brand-lime transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-8 h-8 bg-white text-black rounded-full flex items-center justify-center hover:bg-brand-lime transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-8 h-8 bg-white text-black rounded-full flex items-center justify-center hover:bg-brand-lime transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-8 h-8 bg-white text-black rounded-full flex items-center justify-center hover:bg-brand-lime transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Link Columns Section -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
                    <!-- Col 1 -->
                    <div class="space-y-4">
                        <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-6">Solutions & Services</h4>
                        <ul class="space-y-3 text-xs text-gray-400">
                            <li><a href="#" class="hover:text-brand-lime transition-colors">AI in Design</a></li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Brand & Identity</a></li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Marketing & Advertising</a>
                            </li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Motion & Video</a></li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Print</a></li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Illustration & Artwork</a>
                            </li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Presentations</a></li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Product & Packaging</a></li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Environmental & Event</a>
                            </li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Corporate & Internal</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Col 2 -->
                    <div class="space-y-4">
                        <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-6">Platform & Pricing</h4>
                        <ul class="space-y-3 text-xs text-gray-400">
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Platform</a></li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Pricing</a></li>
                        </ul>
                    </div>

                    <!-- Col 3 -->
                    <div class="space-y-4">
                        <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-6">Resources</h4>
                        <ul class="space-y-3 text-xs text-gray-400">
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Blog</a></li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Customer Stories</a></li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Guides & Ebooks</a></li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Podcast</a></li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Webinars & Events</a></li>
                        </ul>
                    </div>

                    <!-- Col 4 -->
                    <div class="space-y-4">
                        <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-6">Why GraphicGuru?</h4>
                        <ul class="space-y-3 text-xs text-gray-400">
                            <li><a href="#" class="hover:text-brand-lime transition-colors">About Us</a></li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Our People</a></li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Careers</a></li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Creative Application</a>
                            </li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Merch Store</a></li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Our Work</a></li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">How We Work</a></li>
                            <li><a href="#" class="hover:text-brand-lime transition-colors">Compare Plans &
                                    Alternatives</a></li>
                        </ul>
                    </div>

                    <!-- Col 5: Help -->
                    <div class="space-y-4">
                        <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-6">Need Help</h4>
                        <ul class="space-y-3 text-xs text-gray-400">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <a href="mailto:help@graphicguru.com"
                                    class="hover:text-brand-lime transition-colors">help@graphicguru.com</a>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                <a href="tel:+18773311272" class="hover:text-brand-lime transition-colors">+1 877 331
                                    1272</a>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                    </path>
                                </svg>
                                <a href="#" class="hover:text-brand-lime transition-colors underline">24/5 live chat</a>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                                <a href="#" class="hover:text-brand-lime transition-colors">Help Center</a>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <a href="#" class="hover:text-brand-lime transition-colors">System Status</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="bg-brand-lime py-6">
                <div
                    class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="flex items-center gap-6">
                        <!-- Logo -->
                        <a href="{{ url('/') }}"
                            class="text-2xl font-black italic tracking-tighter text-black uppercase">
                            GraphicGuru
                        </a>

                        <!-- AI Summary Pill -->
                        <div
                            class="hidden sm:flex items-center gap-2 px-3 py-1 rounded-full border border-black/20 text-black text-xs font-bold">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            AI Summary
                        </div>
                    </div>

                    <div class="flex gap-6 text-[10px] font-bold text-black uppercase tracking-wide">
                        <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                        <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                        <a href="#" class="hover:text-white transition-colors">API Docs</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>