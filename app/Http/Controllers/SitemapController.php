<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class SitemapController extends Controller
{
    public function index()
    {
        $posts = Post::published()->latest('updated_at')->get();

        $content = view('sitemap.index', compact('posts'))->render();

        return response($content, 200)
            ->header('Content-Type', 'text/xml');
    }
}
