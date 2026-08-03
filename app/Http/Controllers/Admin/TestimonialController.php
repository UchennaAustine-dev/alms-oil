<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('order')->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'quote'   => 'required|string',
            'name'    => 'required|string|max:100',
            'role'    => 'required|string|max:100',
            'company' => 'required|string|max:100',
            'initial' => 'required|string|max:2',
            'active'  => 'boolean',
            'order'   => 'integer|min:0',
        ]);

        $data['active'] = $request->boolean('active', true);
        $data['order']  = $request->integer('order', 0);

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial added.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'quote'   => 'required|string',
            'name'    => 'required|string|max:100',
            'role'    => 'required|string|max:100',
            'company' => 'required|string|max:100',
            'initial' => 'required|string|max:2',
            'active'  => 'boolean',
            'order'   => 'integer|min:0',
        ]);

        $data['active'] = $request->boolean('active');
        $data['order']  = $request->integer('order', 0);

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial updated.');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial deleted.');
    }
}
