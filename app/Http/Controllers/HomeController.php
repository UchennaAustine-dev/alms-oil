<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\SiteSetting;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        // Get active testimonials ordered by position
        $testimonials = Testimonial::where('active', true)
            ->orderBy('order')
            ->get();

        // Get latest 3 published blog posts for the homepage preview
        $recentPosts = BlogPost::where('published', true)
            ->latest('published_at')
            ->limit(3)
            ->get();

        // Get site settings as a flat key => value array
        $settings = SiteSetting::all()->pluck('value', 'key');

        return view('home', compact('testimonials', 'recentPosts', 'settings'));
    }
}
