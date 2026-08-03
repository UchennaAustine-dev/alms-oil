@extends('layouts.admin')
@section('title', 'Add Testimonial')
@section('page-title', 'Add Testimonial')

@section('content')
<div class="max-w-xl">
    <form method="POST" action="{{ route('admin.testimonials.store') }}" class="space-y-5">
        @csrf

        @if($errors->any())
            <div class="px-4 py-3 rounded-xl bg-red-50 border border-red-200 text-red-700 text-sm">
                @foreach($errors->all() as $e)<p>{{ $e }}</p>@endforeach
            </div>
        @endif

        @php
            $ic = 'w-full px-4 py-2.5 rounded-xl bg-gray-50 border border-gray-200 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:border-amber-400 focus:bg-white focus:ring-2 focus:ring-amber-100 transition-all';
            $lc = 'text-[11px] font-bold uppercase tracking-wider text-gray-500 block mb-1.5';
        @endphp

        <div class="bg-white border border-gray-200 rounded-2xl p-6 space-y-5">
            <div>
                <label class="{{ $lc }}">Quote *</label>
                <textarea name="quote" rows="4" required placeholder="Testimonial text…" class="{{ $ic }}">{{ old('quote') }}</textarea>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="{{ $lc }}">Full Name *</label>
                    <input type="text" name="name" required value="{{ old('name') }}" placeholder="Mr. John Doe" class="{{ $ic }}" />
                </div>
                <div>
                    <label class="{{ $lc }}">Initial *</label>
                    <input type="text" name="initial" required maxlength="2" value="{{ old('initial') }}" placeholder="J" class="{{ $ic }}" />
                </div>
                <div>
                    <label class="{{ $lc }}">Role *</label>
                    <input type="text" name="role" required value="{{ old('role') }}" placeholder="CEO" class="{{ $ic }}" />
                </div>
                <div>
                    <label class="{{ $lc }}">Company *</label>
                    <input type="text" name="company" required value="{{ old('company') }}" placeholder="Company Name" class="{{ $ic }}" />
                </div>
                <div>
                    <label class="{{ $lc }}">Display Order</label>
                    <input type="number" name="order" value="{{ old('order', 0) }}" min="0" class="{{ $ic }}" />
                </div>
                <div class="flex items-end pb-1">
                    <label class="flex items-center gap-2.5 cursor-pointer">
                        <input type="checkbox" name="active" value="1" checked class="w-4 h-4 rounded accent-amber-500" />
                        <span class="text-sm font-medium text-gray-700">Active (visible on site)</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="flex gap-3">
            <button type="submit" class="px-6 py-2.5 rounded-xl bg-amber-500 hover:bg-amber-400 text-white text-sm font-semibold transition-colors shadow-sm shadow-amber-100">
                Add Testimonial
            </button>
            <a href="{{ route('admin.testimonials.index') }}" class="px-6 py-2.5 rounded-xl bg-white border border-gray-200 text-gray-600 text-sm font-medium hover:bg-gray-50 transition-colors">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
