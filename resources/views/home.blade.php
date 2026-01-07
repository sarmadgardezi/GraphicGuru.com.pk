@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 py-20 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl lg:text-6xl font-extrabold text-white tracking-tight mb-6">
            Unleash Your Creativity
        </h1>
        <p class="text-lg lg:text-xl text-indigo-100 max-w-2xl mx-auto mb-10">
            Download high-quality graphics, templates, and assets for your next big project.
        </p>
        <div class="flex justify-center space-x-4">
            <a href="{{ route('products.index') }}" class="bg-white text-indigo-600 font-bold py-3 px-8 rounded-full shadow-lg hover:bg-gray-100 transition transform hover:-translate-y-1">
                Browse Assets
            </a>
            <a href="#featured" class="bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white hover:text-indigo-600 transition">
                Learn More
            </a>
        </div>
    </div>
</div>

<!-- Featured Section -->
<div id="featured" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="flex justify-between items-end mb-8">
        <h2 class="text-3xl font-bold text-gray-900">Featured Assets</h2>
        <a href="{{ route('products.index') }}" class="text-primary hover:text-indigo-700 font-medium">View All &rarr;</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($featuredProducts as $product)
            <div class="group bg-white rounded-xl shadow-sm hover:shadow-md transition duration-200 overflow-hidden border border-gray-100">
                <a href="{{ route('products.show', $product->slug) }}" class="block relative aspect-w-16 aspect-h-12 overflow-hidden bg-gray-200">
                     @if($product->preview_image)
                        <img src="{{ $product->preview_image }}" alt="{{ $product->title }}" class="object-cover w-full h-48 group-hover:scale-105 transition duration-500">
                    @else
                         <div class="w-full h-48 flex items-center justify-center text-gray-400">
                             <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                         </div>
                    @endif
                    @if($product->is_premium)
                        <span class="absolute top-2 right-2 bg-yellow-400 text-yellow-900 text-xs font-bold px-2 py-1 rounded shadow">Premium</span>
                    @endif
                </a>
                <div class="p-5">
                    <p class="text-sm text-gray-500 mb-1">{{ $product->category->name ?? 'General' }}</p>
                    <a href="{{ route('products.show', $product->slug) }}">
                        <h3 class="text-lg font-bold text-gray-900 mb-2 hover:text-primary transition">{{ $product->title }}</h3>
                    </a>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-lg font-bold text-gray-900">
                            {{ $product->is_free ? 'Free' : '$' . number_format($product->price, 2) }}
                        </span>
                        <a href="{{ route('products.show', $product->slug) }}" class="text-sm font-medium text-primary hover:underline">Download</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-500">No featured products yet. Check back soon!</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
