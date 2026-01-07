@extends('layouts.app')

@section('content')
<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-900">Explore Assets</h1>
            <p class="text-gray-500 mt-2">Find the perfect resources for your creative work.</p>
        </div>

        <!-- Filters (Mockup) -->
        <div class="flex flex-wrap justify-center gap-4 mb-10">
            <a href="#" class="px-4 py-2 rounded-full bg-white border border-gray-300 text-gray-700 text-sm font-medium hover:border-primary hover:text-primary transition">All</a>
            <a href="#" class="px-4 py-2 rounded-full bg-white border border-gray-300 text-gray-700 text-sm font-medium hover:border-primary hover:text-primary transition">Graphics</a>
            <a href="#" class="px-4 py-2 rounded-full bg-white border border-gray-300 text-gray-700 text-sm font-medium hover:border-primary hover:text-primary transition">Templates</a>
            <a href="#" class="px-4 py-2 rounded-full bg-white border border-gray-300 text-gray-700 text-sm font-medium hover:border-primary hover:text-primary transition">Icons</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse($products as $product)
            <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition duration-200 overflow-hidden">
                <a href="{{ route('products.show', $product->slug) }}" class="block relative group">
                    @if($product->preview_image)
                        <img src="{{ $product->preview_image }}" alt="{{ $product->title }}" class="object-cover w-full h-48">
                    @else
                         <div class="w-full h-48 flex items-center justify-center bg-gray-100 text-gray-400">
                             <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                         </div>
                    @endif
                </a>
                <div class="p-4">
                    <p class="text-xs text-gray-500 mb-1">{{ $product->category->name ?? 'Uncategorized' }}</p>
                    <a href="{{ route('products.show', $product->slug) }}" class="block mb-2">
                        <h3 class="text-md font-bold text-gray-900 truncate">{{ $product->title }}</h3>
                    </a>
                    <div class="flex justify-between items-center">
                         <span class="text-sm font-bold text-gray-800">
                            {{ $product->is_free ? 'Free' : '$' . number_format($product->price, 2) }}
                        </span>
                        <a href="{{ route('products.show', $product->slug) }}" class="text-xs text-primary font-medium hover:underline">View Details</a>
                    </div>
                </div>
            </div>
            @empty
             <div class="col-span-full py-20 text-center">
                <p class="text-gray-500 text-lg">No products found matching your criteria.</p>
            </div>
            @endforelse
        </div>
        
        <div class="mt-12">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection
