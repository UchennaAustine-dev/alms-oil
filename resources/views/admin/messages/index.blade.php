@extends('layouts.admin')
@section('title', 'Messages')
@section('page-title', 'Contact Messages')

@section('content')

<div class="flex items-center justify-between mb-5">
    <p class="text-sm text-gray-500">{{ $messages->count() }} total · {{ $messages->where('read', false)->count() }} unread</p>
</div>

<div class="grid grid-cols-1 lg:grid-cols-5 gap-5">

    {{-- List --}}
    <div class="lg:col-span-2 bg-white border border-gray-200 rounded-2xl overflow-hidden">
        @if($messages->isEmpty())
            <div class="py-16 text-center text-sm text-gray-400">No messages yet.</div>
        @else
            <div class="divide-y divide-gray-50">
                @foreach($messages as $m)
                    <a href="{{ route('admin.messages.show', $m) }}"
                       class="flex items-start gap-3 px-4 py-3.5 hover:bg-gray-50 transition-colors {{ !$m->read ? 'bg-amber-50/40' : '' }} {{ request()->routeIs('admin.messages.show') && request()->route('message')?->id == $m->id ? 'bg-amber-50 border-l-2 border-amber-400' : '' }}">
                        <div class="mt-0.5 shrink-0">
                            @if(!$m->read)
                                <svg class="w-4 h-4 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            @else
                                <svg class="w-4 h-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/></svg>
                            @endif
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="text-sm {{ !$m->read ? 'font-semibold text-gray-900' : 'font-medium text-gray-600' }} truncate">{{ $m->name }}</p>
                            <p class="text-xs text-gray-400 truncate">{{ $m->email }}</p>
                            <p class="text-xs text-gray-400 truncate mt-0.5 line-clamp-1">{{ $m->message }}</p>
                        </div>
                        <span class="text-[10px] text-gray-400 shrink-0">{{ $m->created_at->format('M d') }}</span>
                    </a>
                @endforeach
            </div>
        @endif
    </div>

    {{-- Detail panel placeholder --}}
    <div class="lg:col-span-3 bg-white border border-gray-200 rounded-2xl flex items-center justify-center min-h-[200px] lg:min-h-[300px]">
        <p class="text-sm text-gray-400">Select a message to read</p>
    </div>
</div>

@endsection
