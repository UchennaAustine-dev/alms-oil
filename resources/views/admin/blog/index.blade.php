@extends('layouts.admin')
@section('title', 'Blog Posts')
@section('page-title', 'Blog Posts')

@section('content')

<div class="flex items-center justify-between mb-5">
    <p class="text-sm text-gray-500">{{ $posts->count() }} total articles</p>
    <a href="{{ route('admin.blog.create') }}"
       class="flex items-center gap-1.5 px-4 py-2 rounded-xl bg-amber-500 hover:bg-amber-400 text-white text-sm font-semibold transition-colors shadow-sm shadow-amber-100">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        New Post
    </a>
</div>

<div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">
    @if($posts->isEmpty())
        <div class="flex flex-col items-center justify-center py-16 text-center">
            <svg class="w-12 h-12 text-gray-200 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            <p class="text-sm text-gray-400">No blog posts yet.</p>
            <a href="{{ route('admin.blog.create') }}" class="mt-3 text-sm font-semibold text-amber-600 hover:text-amber-500">Create your first post →</a>
        </div>
    @else
        {{-- Desktop table --}}
        <div class="hidden sm:block overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-gray-100 text-left">
                        <th class="px-5 py-3 text-[11px] font-bold uppercase tracking-wider text-gray-400">Title</th>
                        <th class="px-4 py-3 text-[11px] font-bold uppercase tracking-wider text-gray-400 hidden md:table-cell">Category</th>
                        <th class="px-4 py-3 text-[11px] font-bold uppercase tracking-wider text-gray-400 hidden lg:table-cell">Date</th>
                        <th class="px-4 py-3 text-[11px] font-bold uppercase tracking-wider text-gray-400">Status</th>
                        <th class="px-4 py-3 text-[11px] font-bold uppercase tracking-wider text-gray-400 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @foreach($posts as $post)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-5 py-4">
                                <div class="flex items-center gap-2">
                                    @if($post->featured)
                                        <svg class="w-3.5 h-3.5 text-amber-400 shrink-0 fill-amber-400" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                    @endif
                                    <span class="font-medium text-gray-900 line-clamp-1">{{ $post->title }}</span>
                                </div>
                                <div class="text-xs text-gray-400 mt-0.5 font-mono">/blog/{{ $post->slug }}</div>
                            </td>
                            <td class="px-4 py-4 hidden md:table-cell text-gray-500 text-xs">{{ $post->category }}</td>
                            <td class="px-4 py-4 hidden lg:table-cell text-gray-400 text-xs">{{ $post->created_at->format('M d, Y') }}</td>
                            <td class="px-4 py-4">
                                <span class="text-[10px] font-bold uppercase px-2.5 py-1 rounded-full
                                    {{ $post->published ? 'bg-emerald-100 text-emerald-700' : 'bg-gray-100 text-gray-500' }}">
                                    {{ $post->published ? 'Published' : 'Draft' }}
                                </span>
                            </td>
                            <td class="px-4 py-4 text-right">
                                <div class="flex items-center gap-1 justify-end">
                                    <a href="{{ route('admin.blog.edit', $post) }}"
                                       class="p-1.5 rounded-lg text-gray-400 hover:text-amber-600 hover:bg-amber-50 transition-colors">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                    </a>
                                    <form method="POST" action="{{ route('admin.blog.destroy', $post) }}"
                                          onsubmit="return confirm('Delete this post?')">
                                        @csrf @method('DELETE')
                                        <button class="p-1.5 rounded-lg text-gray-400 hover:text-red-600 hover:bg-red-50 transition-colors">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a1 1 0 011-1h4a1 1 0 011 1v2"/></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Mobile cards --}}
        <div class="sm:hidden divide-y divide-gray-50">
            @foreach($posts as $post)
                <div class="p-4">
                    <div class="flex items-start justify-between gap-3">
                        <div class="min-w-0">
                            <span class="text-[10px] font-bold uppercase px-2 py-0.5 rounded-full mr-2
                                {{ $post->published ? 'bg-emerald-100 text-emerald-700' : 'bg-gray-100 text-gray-500' }}">
                                {{ $post->published ? 'Published' : 'Draft' }}
                            </span>
                            <p class="text-sm font-semibold text-gray-900 mt-2">{{ $post->title }}</p>
                            <p class="text-xs text-gray-400 mt-1">{{ $post->category }} · {{ $post->created_at->format('M d, Y') }}</p>
                        </div>
                    </div>
                    <div class="flex gap-2 mt-3">
                        <a href="{{ route('admin.blog.edit', $post) }}"
                           class="flex-1 flex items-center justify-center gap-1.5 py-2 rounded-lg text-xs font-semibold text-gray-600 bg-gray-100 hover:bg-gray-200 transition-colors">
                            Edit
                        </a>
                        <form method="POST" action="{{ route('admin.blog.destroy', $post) }}" onsubmit="return confirm('Delete?')" class="flex-none">
                            @csrf @method('DELETE')
                            <button class="p-2 rounded-lg text-gray-400 hover:text-red-600 hover:bg-red-50 transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a1 1 0 011-1h4a1 1 0 011 1v2"/></svg>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@endsection
