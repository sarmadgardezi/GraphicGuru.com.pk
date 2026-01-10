@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-gray-800">Dashboard</h2>
        <p class="text-gray-600 mt-2">Overview of your application statistics.</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total Users Card -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 flex flex-col justify-between hover:shadow-md transition-shadow">
            <div>
                <h3 class="text-gray-500 text-sm font-medium uppercase tracking-wider">Total Users</h3>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{ number_format($stats['total_users']) }}</p>
            </div>
            <div class="mt-4 flex items-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                <span>Registered counts</span>
            </div>
        </div>

        <!-- Total Admins Card -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 flex flex-col justify-between hover:shadow-md transition-shadow">
            <div>
                <h3 class="text-gray-500 text-sm font-medium uppercase tracking-wider">Total Admins</h3>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{ number_format($stats['admins']) }}</p>
            </div>
            <div class="mt-4 flex items-center text-sm text-purple-600">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                <span>Privileged accounts</span>
            </div>
        </div>

        <!-- Total Posts Card -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 flex flex-col justify-between hover:shadow-md transition-shadow">
            <div>
                <h3 class="text-gray-500 text-sm font-medium uppercase tracking-wider">Total Posts</h3>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{ number_format($stats['total_posts']) }}</p>
            </div>
            <div class="mt-4 flex items-center text-sm text-blue-600">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                <span>All blog entries</span>
            </div>
        </div>
        
        <!-- Published Posts Card -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 flex flex-col justify-between hover:shadow-md transition-shadow">
            <div>
                <h3 class="text-gray-500 text-sm font-medium uppercase tracking-wider">Published</h3>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{ number_format($stats['published_posts']) }}</p>
            </div>
            <div class="mt-4 flex items-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span>Live on site</span>
            </div>
        </div>

        <!-- Draft Posts Card -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 flex flex-col justify-between hover:shadow-md transition-shadow">
            <div>
                <h3 class="text-gray-500 text-sm font-medium uppercase tracking-wider">Drafts</h3>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{ number_format($stats['draft_posts']) }}</p>
            </div>
            <div class="mt-4 flex items-center text-sm text-amber-600">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                <span>Work in progress</span>
            </div>
        </div>
    </div>

    <!-- Recent Registrations -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
            <h3 class="font-bold text-gray-800">Recent Registrations</h3>
            <a href="{{ route('admin.users.index') }}" class="text-sm text-blue-600 hover:text-blue-800 font-medium">View All</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50 text-gray-600 text-xs uppercase tracking-wider">
                    <tr>
                        <th class="px-6 py-4 font-semibold">Name</th>
                        <th class="px-6 py-4 font-semibold">Email</th>
                        <th class="px-6 py-4 font-semibold">Role</th>
                        <th class="px-6 py-4 font-semibold">Joined</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($stats['recent_users'] as $user)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $user->name }}</td>
                            <td class="px-6 py-4 text-gray-600">{{ $user->email }}</td>
                            <td class="px-6 py-4">
                                @if($user->is_admin)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                        Admin
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                        User
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-gray-500 text-sm">{{ $user->created_at->diffForHumans() }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-8 text-center text-gray-500">No recent users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
