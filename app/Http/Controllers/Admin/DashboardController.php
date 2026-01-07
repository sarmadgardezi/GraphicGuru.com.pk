<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalProducts = Product::count();
        $freeProducts = Product::where('is_free', true)->count();
        $premiumProducts = Product::where('is_premium', true)->count();
        
        $recentProducts = Product::latest()->take(5)->get();
        $recentUsers = User::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalUsers', 
            'totalProducts', 
            'freeProducts', 
            'premiumProducts',
            'recentProducts',
            'recentUsers'
        ));
    }
}
