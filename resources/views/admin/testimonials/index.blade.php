@extends('layouts.admin')
@section('title', 'Testimonials')
@section('page-title', 'Testimonials')

@section('content')

<div class="flex items-center justify-between mb-5">
    <p class="text-sm text-gray-500">{{ $testimonials->count() }} total · {{ $testimonials->where('active', true)->count() }} active</p>
    <a href="{{ route('admin.testimonials.create') }}"
       class="flex items-center gap-1.5 px-4 py-2 rounded-xl bg-amber-500 hover:bg-amber-400 text-white text-sm font-semibold transition-colors shadow-sm shadow-amber-100">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        Add Testimonial
    </a>
</div>

<div class="space-y-3">
    @forelse($testimonials as $t)
        <div class="bg-white border border-gray-200 rounded-2xl p-5 flex items-start gap-4">
            <div class="w-10 h-10 rounded-full bg-amber-500 text-white font-bold text-sm flex items-center justify-center shrink-0">
                {{ $t->initial }}
            </div>
            <div class="flex-1 min-w-0">
                <div class="flex items-start justify-between gap-3">
                    <div>
                        <p class="text-sm font-semibold text-gray-900">{{ $t->name }}</p>
                        <p class="text-xs text-gray-400 mt-0.5">{{ $t->role }}, {{ $t->company }}</p>
                    </div>
                    <div class="flex items-center gap-1.5 shrink-0">
                        <span class="text-[10px] font-bold uppercase px-2 py-0.5 rounded-full {{ $t->active ? 'bg-emerald-100 text-emerald-700' : 'bg-gray-100 text-gray-500' }}">
                            {{ $t->active ? 'Active' : 'Hidden' }}
                        </span>
                    </div>
                </div>
                <p class="text-xs text-gray-500 mt-2 italic line-clamp-2">&ldquo;{{ $t->quote }}&rdquo;</p>
                <div class="flex items-center gap-3 mt-3">
                    <a href="{{ route('admin.testimonials.edit', $t) }}"
                       class="text-xs font-semibold text-amber-600 hover:text-amber-500 transition-colors">Edit</a>
                    <form method="POST" action="{{ route('admin.testimonials.destroy', $t) }}"
                          onsubmit="return confirm('Delete this testimonial?')">
                        @csrf @method('DELETE')
                        <button class="text-xs font-semibold text-red-500 hover:text-red-700 transition-colors">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="bg-white border border-gray-200 rounded-2xl py-16 text-center">
            <p class="text-sm text-gray-400">No testimonials yet.</p>
            <a href="{{ route('admin.testimonials.create') }}" class="mt-2 inline-block text-sm font-semibold text-amber-600 hover:text-amber-500">Add your first →</a>
        </div>
    @endforelse
</div>

@endsection
