@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-brand-black pt-20 pb-16 sm:pb-24 lg:pb-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-brand-lime font-bold tracking-widest uppercase text-xs mb-4">THE O.G.</h2>
                    <h1
                        class="text-5xl md:text-7xl font-heading font-black tracking-tighter text-white mb-6 leading-[0.9] uppercase">
                        LET ME TELL YOU <br> SOMETHING
                    </h1>
                    <p class="text-gray-400 text-lg md:text-xl max-w-xl leading-relaxed">
                        We are an industry leading subscription-based creative service platform with expert talent, smart
                        systems and dedicated support. We handle the design work so you can focus on strategy, growth and
                        the big picture.
                        <br><br>
                        At GraphicGuru, we provide all graphics for free, paid, and everything in between to empower your
                        creative journey.
                    </p>
                    <div class="mt-8">
                        <a href="{{ route('register') }}"
                            class="inline-block bg-brand-lime text-black font-bold rounded-full px-8 py-4 text-lg hover:bg-white transition-colors transform hover:scale-105 duration-200">
                            Get Started
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <!-- Placeholder for the "Pickle/Guru" character image from screenshot -->
                    <div class="aspect-[4/5] rounded-3xl overflow-hidden bg-[#111] border border-white/10 relative group">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=800"
                            alt="Creative Team"
                            class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-500 hover:rotate-1 hover:scale-105 transform">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-black via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-6 left-6 max-w-xs">
                            <p class="text-white font-heading font-bold text-2xl leading-none">"I didn't choose the mug
                                life, the mug life chose me."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Trusted By Section -->
    <div class="bg-black py-12 border-t border-white/10 border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-gray-500 text-sm font-bold uppercase tracking-wider mb-8 text-center sm:text-left">Trusted by the
                world's fastest growing startups</p>
            <div
                class="flex flex-wrap justify-center sm:justify-between items-center gap-8 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                <!-- Logos (Mock) -->
                <span class="text-2xl font-black text-white">7<span class="text-brand-lime">ELEVEn</span></span>
                <span class="text-xl font-bold text-white tracking-widest">Trainual</span>
                <span class="text-xl font-mono text-white">PrograMetrix</span>
                <span class="text-2xl font-serif italic text-white">yahoo<span class="text-brand-lime">!</span></span>
                <span class="text-xl font-bold text-white">Salesloft.</span>
                <span class="text-xl font-bold text-white">amazon</span>
            </div>
        </div>
    </div>

    <!-- Fun Facts Section -->
    <div class="bg-[#F3F3F3] py-24 text-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-16">
                <p class="text-xs font-bold uppercase tracking-widest text-gray-500 mb-2">IN CASE YOU'RE CURIOUS</p>
                <h2 class="text-5xl font-heading font-black uppercase text-black">FUN FACTS</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-16">
                <!-- Fact 1 -->
                <div class="border-b border-dashed border-gray-300 pb-6">
                    <h3 class="text-6xl font-black text-blue-600 mb-2">HQ</h3>
                    <p class="text-sm font-bold text-gray-400 uppercase tracking-wide mb-2">Founded in Scottsdale, Arizona.
                    </p>
                </div>
                <!-- Fact 2 -->
                <div class="border-b border-dashed border-gray-300 pb-6">
                    <h3 class="text-6xl font-black text-blue-600 mb-2">3M+</h3>
                    <p class="text-sm font-bold text-gray-400 uppercase tracking-wide mb-2">Designs delivered and counting.
                    </p>
                </div>
                <!-- Fact 3 -->
                <div class="border-b border-dashed border-gray-300 pb-6">
                    <h3 class="text-5xl sm:text-6xl font-black text-blue-600 mb-2">WE GLOBAL</h3>
                    <p class="text-sm font-bold text-gray-400 uppercase tracking-wide mb-2">Creative network spanning over
                        12 countries.</p>
                </div>
                <!-- Fact 4 -->
                <div class="border-b border-dashed border-gray-300 pb-6">
                    <h3 class="text-5xl sm:text-6xl font-black text-blue-600 mb-2">INC. 5000</h3>
                    <p class="text-sm font-bold text-gray-400 uppercase tracking-wide mb-2">Fastest Growing Companies 2019,
                        2020, 2021.</p>
                </div>
                <!-- Fact 5 -->
                <div class="border-b border-dashed border-gray-300 pb-6">
                    <h3 class="text-6xl font-black text-blue-600 mb-2">4.4/5</h3>
                    <p class="text-sm font-bold text-gray-400 uppercase tracking-wide mb-2">Top rated on G2.</p>
                </div>
                <!-- Fact 6 -->
                <div class="border-b border-dashed border-gray-300 pb-6">
                    <h3 class="text-6xl font-black text-blue-600 mb-2">5Y</h3>
                    <p class="text-sm font-bold text-gray-400 uppercase tracking-wide mb-2">In a row rated top places to
                        work.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Brand Promise Section -->
    <div class="bg-brand-black py-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <p class="text-brand-lime font-bold uppercase tracking-widest text-xs mb-4">WHY WE WORK</p>
            <h2
                class="text-5xl md:text-7xl font-heading font-black text-white uppercase tracking-tighter mb-8 max-w-4xl mx-auto leading-[0.9]">
                OUR BRAND PROMISE
            </h2>
            <p class="text-gray-400 max-w-2xl mx-auto mb-16 text-sm">
                We deliver creative services that help businesses move faster and stay on-brand, powered by expert talent
                and a platform built for flow. But great design is just the start. We're here to change lives through
                creativity.
            </p>

            <!-- Grid of Faces (Simulated with images) -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto mb-20 opacity-80">
                <img src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?auto=format&fit=crop&q=80&w=300"
                    class="rounded-2xl rotate-2 hover:rotate-0 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&q=80&w=300"
                    class="rounded-2xl -rotate-2 hover:rotate-0 transition-transform duration-300 translate-y-8">
                <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&q=80&w=300"
                    class="rounded-2xl rotate-1 hover:rotate-0 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=300"
                    class="rounded-2xl -rotate-3 hover:rotate-0 transition-transform duration-300 translate-y-6">
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
                <!-- Feature 1 -->
                <div
                    class="bg-[#111] p-8 rounded-2xl border border-white/10 hover:border-brand-lime/50 transition-colors group">
                    <div class="text-2xl text-white mb-4">❤️</div>
                    <h3 class="text-white font-bold text-lg mb-3 group-hover:text-brand-lime transition-colors">1. A design
                        team you'll love</h3>
                    <p class="text-gray-400 text-xs leading-relaxed">An expert design team that's responsive, reliable, and
                        dedicated to your success, giving you confidence that every project is handled with care.</p>
                </div>
                <!-- Feature 2 -->
                <div
                    class="bg-[#111] p-8 rounded-2xl border border-white/10 hover:border-brand-lime/50 transition-colors group">
                    <div class="text-2xl text-white mb-4">💪</div>
                    <h3 class="text-white font-bold text-lg mb-3 group-hover:text-brand-lime transition-colors">2. Designs
                        that kick-ass</h3>
                    <p class="text-gray-400 text-xs leading-relaxed">Our designers are built to deliver results - ads that
                        convert, branding that stands out, and content that engages.</p>
                </div>
                <!-- Feature 3 -->
                <div
                    class="bg-[#111] p-8 rounded-2xl border border-white/10 hover:border-brand-lime/50 transition-colors group">
                    <div class="text-2xl text-white mb-4">🤝</div>
                    <h3 class="text-white font-bold text-lg mb-3 group-hover:text-brand-lime transition-colors">3. Clear,
                        honest, no B.S.</h3>
                    <p class="text-gray-400 text-xs leading-relaxed">No surprises. No hidden costs. Just clear pricing and
                        predictable results - one price, as many revisions as you need.</p>
                </div>
                <!-- Feature 4 -->
                <div
                    class="bg-[#111] p-8 rounded-2xl border border-white/10 hover:border-brand-lime/50 transition-colors group">
                    <div class="text-2xl text-white mb-4">👍</div>
                    <h3 class="text-white font-bold text-lg mb-3 group-hover:text-brand-lime transition-colors">4. We've got
                        your back</h3>
                    <p class="text-gray-400 text-xs leading-relaxed">Proactive creative support helps you get the designs
                        you need - when you need them most. With 24/5 support.</p>
                </div>
                <!-- Feature 5 -->
                <div
                    class="bg-[#111] p-8 rounded-2xl border border-white/10 hover:border-brand-lime/50 transition-colors group">
                    <div class="text-2xl text-white mb-4">🎉</div>
                    <h3 class="text-white font-bold text-lg mb-3 group-hover:text-brand-lime transition-colors">5. Say
                        goodbye to process hell</h3>
                    <p class="text-gray-400 text-xs leading-relaxed">GraphicGuru simplifies the entire design process - from
                        requests to reviews to approvals so you can focus on running your business.</p>
                </div>
                <!-- Feature 6 -->
                <div
                    class="bg-[#111] p-8 rounded-2xl border border-white/10 hover:border-brand-lime/50 transition-colors group">
                    <div class="text-2xl text-white mb-4">🪄</div>
                    <h3 class="text-white font-bold text-lg mb-3 group-hover:text-brand-lime transition-colors">6. We are
                        design experts</h3>
                    <p class="text-gray-400 text-xs leading-relaxed">Our designers are equipped with the latest creative AI
                        tools to deliver smarter, faster results.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="bg-[#0a0a0a] py-24 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-16">
                <p class="text-brand-lime font-bold uppercase tracking-widest text-xs mb-2">IT STARTS WITH THIS</p>
                <h2 class="text-6xl font-heading font-black text-white uppercase tracking-tighter">OUR MISSION</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Mission 1 -->
                <div>
                    <h3 class="text-6xl font-heading font-black text-brand-lime mb-4">1. DELIVER</h3>
                    <p class="text-gray-300 text-lg">World-class creative services, products, and careers.</p>
                </div>
                <!-- Mission 2 -->
                <div>
                    <h3 class="text-6xl font-heading font-black text-brand-lime mb-4">2. CREATE</h3>
                    <p class="text-gray-300 text-lg">A simplified, powerful, and customizable experience for your creative
                        team and workflows.</p>
                </div>
                <!-- Mission 3 -->
                <div>
                    <h3 class="text-6xl font-heading font-black text-brand-lime mb-4">3. ADVANCE</h3>
                    <p class="text-gray-300 text-lg">The access of creativity around the globe.</p>
                </div>
            </div>
        </div>
    </div>
@endsection