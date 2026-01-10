<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_users' => User::count(),
            'admins' => User::where('is_admin', true)->count(),
            'recent_users' => User::latest()->take(5)->get(),
            'total_posts' => \App\Models\Post::count(),
            'published_posts' => \App\Models\Post::where('status', 'published')->count(),
            'draft_posts' => \App\Models\Post::where('status', 'draft')->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
