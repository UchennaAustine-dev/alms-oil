<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::latest()->get();
        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'excerpt'     => 'required|string',
            'category'    => 'required|string|max:100',
            'body'        => 'required|string',
            'author'      => 'required|string|max:100',
            'author_role' => 'required|string|max:100',
            'read_time'   => 'required|string|max:50',
            'featured'    => 'boolean',
            'published'   => 'boolean',
        ]);

        // Auto-generate slug from title
        $data['slug'] = Str::slug($data['title']);

        // Make slug unique if it already exists
        $originalSlug = $data['slug'];
        $count = 1;
        while (BlogPost::where('slug', $data['slug'])->exists()) {
            $data['slug'] = $originalSlug . '-' . $count++;
        }

        $data['featured'] = $request->boolean('featured');
        $data['published'] = $request->boolean('published');

        if ($data['published']) {
            $data['published_at'] = now();
        }

        BlogPost::create($data);

        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog post created successfully.');
    }

    public function edit(BlogPost $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, BlogPost $blog)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'excerpt'     => 'required|string',
            'category'    => 'required|string|max:100',
            'body'        => 'required|string',
            'author'      => 'required|string|max:100',
            'author_role' => 'required|string|max:100',
            'read_time'   => 'required|string|max:50',
            'featured'    => 'boolean',
            'published'   => 'boolean',
        ]);

        $data['featured'] = $request->boolean('featured');
        $wasPublished = $blog->published;
        $data['published'] = $request->boolean('published');

        // Set published_at only on first publish
        if ($data['published'] && ! $wasPublished) {
            $data['published_at'] = now();
        } elseif (! $data['published']) {
            $data['published_at'] = null;
        }

        $blog->update($data);

        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog post updated successfully.');
    }

    public function destroy(BlogPost $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog post deleted.');
    }
}
