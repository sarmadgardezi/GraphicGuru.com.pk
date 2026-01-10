@extends('layouts.app')

@section('content')
    <!-- Post Hero -->
    <div class="relative pt-16 pb-12 sm:pt-24 sm:pb-16 bg-[#0a0a0a] border-b border-white/5">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <a href="{{ route('blog.index') }}"
                    class="inline-flex items-center text-gray-400 hover:text-brand-lime mb-8 transition-colors text-sm font-medium">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Articles
                </a>

                <div
                    class="inline-flex items-center justify-center px-4 py-1 rounded-full border border-gray-800 bg-[#111] mb-8">
                    <span
                        class="text-brand-lime text-xs font-bold uppercase tracking-wider">{{ $post->published_at ? $post->published_at->format('M d, Y') : 'Draft' }}</span>
                </div>

                <h1 class="text-4xl md:text-6xl font-heading font-black text-white tracking-tight mb-8 leading-[1.1]">
                    {{ $post->title }}
                </h1>

                <div class="flex items-center justify-center space-x-4">
                    <div
                        class="w-12 h-12 rounded-full bg-brand-lime flex items-center justify-center text-black font-bold text-xl font-heading uppercase">
                        GG</div>
                    <div class="text-left">
                        <p class="text-white font-bold text-base">Graphic Guru Team</p>
                        <p class="text-gray-500 text-xs uppercase tracking-wide">Editor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Image -->
    @if($post->featured_image)
        <div class="w-full h-[50vh] md:h-[70vh] relative overflow-hidden bg-[#111]">
            <img src="{{ $post->featured_image }}" alt="{{ $post->title }}" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a]/50 via-transparent to-[#0a0a0a]"></div>
        </div>
    @endif

    <!-- Content -->
    <div class="relative bg-brand-black px-4 sm:px-6 lg:px-8 py-20 -mt-32">
        <div class="max-w-3xl mx-auto bg-[#111] border border-white/10 rounded-3xl p-8 md:p-12 shadow-2xl relative z-10">
            <div
                class="prose prose-lg prose-invert max-w-none prose-headings:font-heading prose-headings:font-bold prose-headings:text-white prose-p:text-gray-300 prose-a:text-brand-lime prose-strong:text-white prose-code:text-brand-lime prose-blockquote:border-brand-lime prose-blockquote:text-gray-400">
                {!! $post->content !!}
            </div>

            <!-- Share / Tags -->
            <div class="mt-16 pt-8 border-t border-white/10 flex justify-between items-center">
                <h3 class="text-gray-500 text-xs font-bold uppercase tracking-wider">Share this article</h3>
                <div class="flex space-x-4">
                    <button class="text-gray-400 hover:text-brand-lime transition-colors">
                        <span class="sr-only">Twitter</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </button>
                    <button class="text-gray-400 hover:text-brand-lime transition-colors">
                        <span class="sr-only">Facebook</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection