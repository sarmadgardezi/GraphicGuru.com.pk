@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="mb-6 flex items-center justify-between">
        <h2 class="text-2xl font-semibold text-gray-800">Add New Product</h2>
        <a href="{{ route('admin.products.index') }}" class="text-gray-600 hover:underline">Back to List</a>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Title -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Product Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" class="w-full rounded border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 p-2 border" required>
                </div>

                <!-- Category -->
                <div>
                     <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                     <select name="category_id" class="w-full rounded border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 p-2 border">
                         <option value="">Select Category</option>
                         @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                         @endforeach
                     </select>
                </div>

                <!-- Status -->
                 <div>
                     <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                     <select name="status" class="w-full rounded border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 p-2 border">
                         <option value="draft">Draft</option>
                         <option value="published">Published</option>
                     </select>
                </div>

                 <!-- Description -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea name="description" rows="4" class="w-full rounded border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 p-2 border">{{ old('description') }}</textarea>
                </div>

                 <!-- Pricing -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Price ($)</label>
                    <input type="number" step="0.01" name="price" value="0.00" class="w-full rounded border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 p-2 border">
                </div>

                <div class="flex items-center space-x-4 mt-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="is_free" value="1" class="rounded border-gray-300 text-primary shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 h-5 w-5">
                        <span class="ml-2 text-sm text-gray-700">Is Free?</span>
                    </label>
                    
                     <label class="flex items-center">
                        <input type="checkbox" name="is_premium" value="1" class="rounded border-gray-300 text-yellow-600 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-500 focus:ring-opacity-50 h-5 w-5">
                        <span class="ml-2 text-sm text-gray-700">Premium Only</span>
                    </label>
                </div>

                <!-- Files -->
                <div class="md:col-span-2 border-t pt-4 mt-2">
                     <label class="block text-sm font-medium text-gray-700 mb-1">Preview Image</label>
                     <input type="file" name="preview_image" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"/>
                </div>
                
                <div class="md:col-span-2">
                     <label class="block text-sm font-medium text-gray-700 mb-1">Product File (Download product)</label>
                     <input type="file" name="product_file" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"/>
                </div>

            </div>

            <div class="mt-8 flex justify-end">
                <button type="submit" class="bg-primary hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded shadow transition duration-200">
                    Create Product
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
