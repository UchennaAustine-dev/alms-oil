<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index()
    {
        $featured = BlogPost::where('published', true)
            ->where('featured', true)
            ->latest('published_at')
            ->first();

        $posts = BlogPost::where('published', true)
            ->when($featured, fn($q) => $q->where('id', '!=', $featured->id))
            ->latest('published_at')
            ->get();

        return view('blog.index', compact('featured', 'posts'));
    }

    public function show(string $slug)
    {
        $post = BlogPost::where('slug', $slug)
            ->where('published', true)
            ->firstOrFail();

        // Related posts — same category, excluding current
        $related = BlogPost::where('published', true)
            ->where('category', $post->category)
            ->where('id', '!=', $post->id)
            ->latest('published_at')
            ->limit(3)
            ->get();

        return view('blog.show', compact('post', 'related'));
    }
}
