@extends('layouts.app')

@section('content')
    <!-- Blog Header -->
    <div class="relative overflow-hidden bg-brand-black pb-16 pt-12 sm:pb-24 lg:pb-32 border-b border-white/10">
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="flex items-center space-x-2 text-brand-lime font-bold mb-6 tracking-wide uppercase text-sm">
                        <span class="w-8 h-[2px] bg-brand-lime"></span>
                        <span>Blog</span>
                    </div>
                    <h1 class="text-5xl md:text-7xl font-heading font-black tracking-tighter text-white mb-6 leading-[0.9]">
                        DESIGN TIPS, <br class="hidden lg:block" />
                        TRENDS, AND <br class="hidden lg:block" />
                        REAL TALK
                    </h1>
                    <p class="mt-4 text-xl text-gray-400 max-w-lg leading-relaxed font-light">
                        Stay ahead of design trends and discover how AI is transforming creativity to help you create smarter.
                    </p>
                </div>
                
                <!-- Subscribe Box -->
                <div class="relative mt-10 lg:mt-0">
                    <div class="bg-[#111] rounded-3xl p-8 border border-white/10 shadow-2xl relative overflow-hidden group">
                       <div class="absolute top-0 right-0 w-64 h-64 bg-brand-lime opacity-5 rounded-full blur-3xl -mr-32 -mt-32"></div>
                       
                        <h3 class="text-brand-lime font-bold uppercase tracking-wider text-sm mb-2">Subscribe To</h3>
                        <h2 class="text-3xl font-heading font-bold text-white mb-4">The Cookbook</h2>
                        <p class="text-gray-400 mb-8 text-sm">Learn a thing or two. All the latest creative trends, marketing insights, and product updates dropped in your inbox.</p>
                        
                        <form action="#" class="space-y-4">
                            <div>
                                <input type="email" placeholder="info@yourcompany.com" class="w-full bg-black border border-gray-700 rounded-full px-6 py-4 text-white placeholder-gray-500 focus:outline-none focus:border-brand-lime focus:ring-1 focus:ring-brand-lime transition-colors">
                            </div>
                            <button type="submit" class="w-full bg-brand-lime text-black font-bold rounded-full px-6 py-4 hover:bg-white transition-colors transform hover:scale-[1.02] duration-200">
                                Subscribe now
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter / Latest Articles Section -->
    <div class="bg-brand-black py-20 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-heading font-bold text-white mb-10">Latest Articles</h2>
            
            <!-- Categories -->
            <div class="flex flex-wrap gap-3 mb-12">
                <a href="#" class="px-5 py-2 rounded-full bg-[#111] text-white text-sm font-medium border border-gray-700 hover:border-brand-lime hover:text-brand-lime transition-colors">All</a>
                <a href="#" class="px-5 py-2 rounded-full bg-transparent text-gray-400 text-sm font-medium border border-gray-800 hover:border-gray-600 hover:text-white transition-colors">Company News</a>
                <a href="#" class="px-5 py-2 rounded-full bg-transparent text-gray-400 text-sm font-medium border border-gray-800 hover:border-gray-600 hover:text-white transition-colors">Graphic Design</a>
                <a href="#" class="px-5 py-2 rounded-full bg-transparent text-gray-400 text-sm font-medium border border-gray-800 hover:border-gray-600 hover:text-white transition-colors">Motion Graphics</a>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($posts as $post)
                    <article class="flex flex-col group bg-[#0a0a0a] rounded-2xl overflow-hidden border border-gray-800 hover:border-brand-lime/50 transition-all duration-300 hover:shadow-2xl hover:shadow-brand-lime/5">
                        <a href="{{ route('blog.show', $post->slug) }}" class="relative overflow-hidden aspect-[4/3] block">
                            @if($post->featured_image)
                                <img src="{{ $post->featured_image }}" alt="{{ $post->title }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            @else
                                <div class="w-full h-full bg-[#111] flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </a>
                        
                        <div class="p-6 flex-1 flex flex-col">
                            <div class="mb-4">
                                <span class="text-xs font-bold text-brand-lime uppercase tracking-wider">Article</span>
                            </div>
                            <h3 class="text-2xl font-heading font-bold text-white mb-3 leading-tight group-hover:text-brand-lime transition-colors">
                                <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                            </h3>
                            <p class="text-gray-400 text-sm line-clamp-3 mb-6 font-light">{{ $post->excerpt }}</p>
                            
                            <div class="mt-auto flex items-center justify-between border-t border-white/5 pt-4">
                                <a href="{{ route('blog.show', $post->slug) }}" class="text-brand-lime text-sm font-bold hover:text-white transition-colors">Read Story</a>
                                <span class="text-gray-600 text-xs">{{ $post->published_at ? $post->published_at->format('M d, Y') : 'Draft' }}</span>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full py-20 text-center border border-dashed border-gray-800 rounded-2xl">
                        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-900 mb-4 text-brand-lime">
                             <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-heading font-bold text-white">No Articles Published</h3>
                        <p class="text-gray-500 mt-2 max-w-sm mx-auto">It looks like the blog is fresh. Check back later or publish your first post!</p>
                        @auth
                            <a href="{{ route('admin.posts.index') }}" class="inline-block mt-6 px-6 py-2 bg-brand-lime text-black font-bold rounded-full hover:bg-white transition-colors">Manage Posts</a>
                        @endauth
                    </div>
                @endforelse
            </div>

            <div class="mt-16">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection