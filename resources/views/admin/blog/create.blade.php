@extends('layouts.admin')
@section('title', 'New Blog Post')
@section('page-title', 'New Blog Post')

@section('content')
<div class="max-w-3xl">
    <form method="POST" action="{{ route('admin.blog.store') }}" class="space-y-5">
        @csrf

        @if($errors->any())
            <div class="px-4 py-3 rounded-xl bg-red-50 border border-red-200 text-red-700 text-sm">
                <ul class="space-y-1">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
            </div>
        @endif

        <div class="bg-white border border-gray-200 rounded-2xl p-6">
            @include('admin.blog._form')
        </div>

        <div class="flex gap-3">
            <button type="submit"
                    class="px-6 py-2.5 rounded-xl bg-amber-500 hover:bg-amber-400 text-white text-sm font-semibold transition-colors shadow-sm shadow-amber-100">
                Create Post
            </button>
            <a href="{{ route('admin.blog.index') }}"
               class="px-6 py-2.5 rounded-xl bg-white border border-gray-200 text-gray-600 text-sm font-medium hover:bg-gray-50 transition-colors">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
