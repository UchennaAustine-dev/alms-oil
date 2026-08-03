<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\QuoteRequest;
use App\Models\ContactMessage;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'posts'        => BlogPost::count(),
            'quotes'       => QuoteRequest::count(),
            'messages'     => ContactMessage::count(),
            'unread'       => ContactMessage::where('read', false)->count(),
            'testimonials' => Testimonial::count(),
            'new_quotes'   => QuoteRequest::where('status', 'new')->count(),
        ];

        $recentQuotes   = QuoteRequest::latest()->limit(5)->get();
        $recentMessages = ContactMessage::latest()->limit(5)->get();

        return view('admin.dashboard', compact('stats', 'recentQuotes', 'recentMessages'));
    }
}
