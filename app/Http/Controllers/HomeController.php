<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::published()->public()->latest()->take(6)->get();
        return view('home', compact('featuredProducts'));
    }

    public function products()
    {
        $products = Product::published()->public()->paginate(12);
        return view('products.index', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->published()->firstOrFail();
        return view('products.show', compact('product'));
    }
}
