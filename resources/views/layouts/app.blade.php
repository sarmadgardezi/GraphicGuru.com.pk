<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Primary Meta Tags -->
    <title>Graphics Guru - Download Great Designs & Graphics for Free</title>
    <meta name="title" content="Graphics Guru - Download Great Designs & Graphics for Free">
    <meta name="description" content="Daily source of Assets for Graphic Designers. All Assets are 100% free. No redirections. No registration required.">
    <meta name="keywords" content="graphic design, free assets, design resources, templates, vectors, mockups, creative, design tool">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Graphics Guru - Download Great Designs & Graphics for Free">
    <meta property="og:description" content="Daily source of Assets for Graphic Designers. All Assets are 100% free. No redirections. No registration required.">
    <meta property="og:image" content="https://images.unsplash.com/photo-1626785774573-4b7993125651?auto=format&fit=crop&q=80&w=1200">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Graphics Guru - Download Great Designs & Graphics for Free">
    <meta property="twitter:description" content="Daily source of Assets for Graphic Designers. All Assets are 100% free. No redirections. No registration required.">
    <meta property="twitter:image" content="https://images.unsplash.com/photo-1626785774573-4b7993125651?auto=format&fit=crop&q=80&w=1200">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Graphics Guru",
      "url": "{{ url('/') }}",
      "description": "Daily source of Assets for Graphic Designers. All Assets are 100% free. No redirections. No registration required.",
      "potentialAction": {
        "@type": "SearchAction",
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
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wdth,wght@12..96,75..100,200..800&display=swap" rel="stylesheet">

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
                        heading: ['Bricolage Grotesque', 'sans-serif'],
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
        
        <footer class="bg-white dark:bg-gray-800 shadow mt-auto">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <p class="text-center text-gray-500 dark:text-gray-400 text-sm">
                    &copy; {{ date('Y') }} GraphicGuru. All rights reserved.
                </p>
            </div>
        </footer>
    </div>
</body>
</html>
