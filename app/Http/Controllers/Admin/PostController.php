<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'published_at' => 'nullable|date',
        ]);

        $data = $validated;
        $data['slug'] = Str::slug($validated['title']);
        $count = 1;
        while (Post::where('slug', $data['slug'])->exists()) {
            $data['slug'] = Str::slug($validated['title']) . '-' . $count;
            $count++;
        }

        if ($request->hasFile('featured_image')) {
            $path = $request->file('featured_image')->store('uploads', 'public');
            $data['featured_image'] = '/storage/' . $path;
        }

        if ($data['status'] === 'published' && empty($data['published_at'])) {
            $data['published_at'] = now();
        }

        Post::create($data);

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'published_at' => 'nullable|date',
        ]);

        $data = $validated;

        // Only update slug if title changed, to preserve SEO if possible, or force update if desired.
        // For now let's keep slug stable unless needed, but user requirement implies auto-generated.
        // A common pattern is to only generate slug on create. 
        // If we want to allow slug updates, we should probably handle it explicitly or only if title changes significantly.
        // Let's rely on manual slug editing if needed or just keep it simple: don't change slug on update automatically to avoid breaking links.

        if ($request->hasFile('featured_image')) {
            // Delete old image
            if ($post->featured_image) {
                $path = str_replace('/storage/', '', $post->featured_image);
                Storage::disk('public')->delete($path);
            }
            $path = $request->file('featured_image')->store('uploads', 'public');
            $data['featured_image'] = '/storage/' . $path;
        }

        if ($data['status'] === 'published' && empty($data['published_at'])) {
            $data['published_at'] = now();
        }

        $post->update($data);

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->featured_image) {
            $path = str_replace('/storage/', '', $post->featured_image);
            Storage::disk('public')->delete($path);
        }

        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully.');
    }
}
