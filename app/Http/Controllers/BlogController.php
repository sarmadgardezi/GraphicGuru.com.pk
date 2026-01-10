<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::published()->latest('published_at')->paginate(10);
        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::published()->where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('post'));
    }
}
