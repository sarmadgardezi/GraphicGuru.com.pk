@extends('layouts.app')

@section('content')
<div class="bg-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-x-12 lg:items-start">
            <!-- Image Gallery -->
            <div class="flex flex-col-reverse">
                <div class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden bg-gray-100 shadow-sm border">
                    @if($product->preview_image)
                        <img src="{{ $product->preview_image }}" alt="{{ $product->title }}" class="w-full h-full object-center object-cover">
                    @else
                          <div class="w-full h-full flex items-center justify-center text-gray-400">
                             <svg class="h-24 w-24" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                         </div>
                    @endif
                </div>
            </div>

            <!-- Product Info -->
            <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-0">
                <div class="mb-4">
                     <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                        {{ $product->category->name ?? 'Graphic' }}
                    </span>
                </div>
                
                <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 mb-4">{{ $product->title }}</h1>

                <div class="mt-3">
                    <p class="text-3xl text-gray-900 font-bold">{{ $product->is_free ? 'Free' : '$' . number_format($product->price, 2) }}</p>
                </div>

                <div class="mt-6">
                    <h3 class="sr-only">Description</h3>
                    <div class="text-base text-gray-700 space-y-6">
                        {!! nl2br(e($product->description)) !!}
                    </div>
                </div>

                <div class="mt-10 flex">
                    @if($product->is_free)
                        <button type="button" class="max-w-xs flex-1 bg-green-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:w-full">
                            Download Now
                        </button>
                    @elseif($product->is_premium)
                         <button type="button" class="max-w-xs flex-1 bg-gradient-to-r from-yellow-500 to-yellow-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 sm:w-full">
                            Unlock with Premium
                        </button>
                    @else
                        <button type="button" class="max-w-xs flex-1 bg-primary border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:w-full">
                            Buy Now
                        </button>
                    @endif
                    
                    <button type="button" class="ml-4 py-3 px-3 rounded-md flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500">
                        <svg class="h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        <span class="sr-only">Add to favorites</span>
                    </button>
                </div>

                <div class="mt-8 border-t border-gray-200 pt-8">
                    <p class="text-sm text-gray-500">
                        License: <span class="text-gray-900 font-medium">Standard License</span> &middot; 
                        File Type: <span class="text-gray-900 font-medium">ZIP</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
