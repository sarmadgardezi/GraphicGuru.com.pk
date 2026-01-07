@extends('layouts.admin')

@section('content')
<div class="mb-6">
    <h2 class="text-3xl font-semibold text-gray-800">Dashboard</h2>
</div>

<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-lg p-6 shadow-sm border-l-4 border-primary">
        <div class="text-gray-500 text-sm uppercase tracking-wide">Total Users</div>
        <div class="mt-2 text-3xl font-bold text-gray-800">{{ $totalUsers ?? 0 }}</div>
    </div>
    
    <div class="bg-white rounded-lg p-6 shadow-sm border-l-4 border-secondary">
        <div class="text-gray-500 text-sm uppercase tracking-wide">Total Products</div>
        <div class="mt-2 text-3xl font-bold text-gray-800">{{ $totalProducts ?? 0 }}</div>
    </div>
    
    <div class="bg-white rounded-lg p-6 shadow-sm border-l-4 border-blue-500">
        <div class="text-gray-500 text-sm uppercase tracking-wide">Free Products</div>
        <div class="mt-2 text-3xl font-bold text-gray-800">{{ $freeProducts ?? 0 }}</div>
    </div>
    
    <div class="bg-white rounded-lg p-6 shadow-sm border-l-4 border-yellow-500">
        <div class="text-gray-500 text-sm uppercase tracking-wide">Premium Products</div>
        <div class="mt-2 text-3xl font-bold text-gray-800">{{ $premiumProducts ?? 0 }}</div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <!-- Recent Products -->
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100 font-semibold text-gray-700 flex justify-between items-center">
            <span>Recent Uploads</span>
            <a href="{{ route('admin.products.index') }}" class="text-primary text-sm hover:underline">View All</a>
        </div>
        <div class="p-6">
            @if(isset($recentProducts) && count($recentProducts) > 0)
                <ul class="divide-y divide-gray-100">
                    @foreach($recentProducts as $product)
                        <li class="py-3 flex justify-between items-center">
                            <div>
                                <p class="text-sm font-medium text-gray-800">{{ $product->title }}</p>
                                <p class="text-xs text-gray-500">{{ $product->created_at->diffForHumans() }}</p>
                            </div>
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $product->status === 'published' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                {{ $product->status }}
                            </span>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-500 text-sm text-center py-4">No products yet.</p>
            @endif
        </div>
    </div>

    <!-- Recent Users -->
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100 font-semibold text-gray-700">
            <span>Recent Users</span>
        </div>
        <div class="p-6">
            @if(isset($recentUsers) && count($recentUsers) > 0)
                <ul class="divide-y divide-gray-100">
                    @foreach($recentUsers as $user)
                        <li class="py-3 flex items-center">
                            <div class="bg-gray-200 rounded-full h-8 w-8 flex items-center justify-center text-xs font-bold text-gray-600 mr-3">
                                {{ substr($user->name, 0, 1) }}
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-800">{{ $user->name }}</p>
                                <p class="text-xs text-gray-500">{{ $user->email }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-500 text-sm text-center py-4">No users yet.</p>
            @endif
        </div>
    </div>
</div>
@endsection
