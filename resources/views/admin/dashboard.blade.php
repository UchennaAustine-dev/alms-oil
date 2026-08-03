@extends('layouts.admin')
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

{{-- Greeting --}}
<div class="mb-6">
    <h2 class="text-xl font-bold font-display text-gray-900">
        Good day, {{ explode(' ', Auth::guard('admin')->user()->name)[0] }} 👋
    </h2>
    <p class="text-gray-500 text-sm mt-0.5">Here's what's happening on the platform today.</p>
</div>

{{-- Stat cards --}}
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
    @php
        $cards = [
            ['label'=>'Blog Posts',     'value'=>$stats['posts'],       'sub'=>'total articles',          'color'=>'text-amber-600',   'bg'=>'bg-amber-50',   'border'=>'border-amber-100',  'href'=>route('admin.blog.index')],
            ['label'=>'Quote Requests', 'value'=>$stats['quotes'],      'sub'=>$stats['new_quotes'].' new','color'=>'text-blue-600',    'bg'=>'bg-blue-50',    'border'=>'border-blue-100',   'href'=>route('admin.quotes.index')],
            ['label'=>'Messages',       'value'=>$stats['messages'],    'sub'=>$stats['unread'].' unread', 'color'=>'text-emerald-600', 'bg'=>'bg-emerald-50', 'border'=>'border-emerald-100','href'=>route('admin.messages.index')],
            ['label'=>'Testimonials',   'value'=>$stats['testimonials'],'sub'=>'active reviews',           'color'=>'text-purple-600',  'bg'=>'bg-purple-50',  'border'=>'border-purple-100', 'href'=>route('admin.testimonials.index')],
        ];
    @endphp
    @foreach($cards as $c)
        <a href="{{ $c['href'] }}"
           class="bg-white border {{ $c['border'] }} rounded-2xl p-5 hover:shadow-sm transition-all group">
            <div class="w-9 h-9 rounded-xl {{ $c['bg'] }} flex items-center justify-center mb-4">
                <div class="w-3 h-3 rounded-sm {{ str_replace('text-','bg-',$c['color']) }}"></div>
            </div>
            <div class="text-2xl font-extrabold font-display text-gray-900">{{ $c['value'] }}</div>
            <div class="text-sm font-semibold text-gray-700 mt-0.5">{{ $c['label'] }}</div>
            <div class="text-xs text-gray-400 mt-0.5">{{ $c['sub'] }}</div>
        </a>
    @endforeach
</div>

{{-- Recent activity --}}
<div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-6">

    {{-- Recent Quotes --}}
    <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">
        <div class="flex items-center justify-between px-5 py-4 border-b border-gray-100">
            <h3 class="text-sm font-semibold text-gray-900">Recent Quote Requests</h3>
            <a href="{{ route('admin.quotes.index') }}" class="text-xs text-amber-600 hover:text-amber-500 font-medium">View all →</a>
        </div>
        @if($recentQuotes->isEmpty())
            <div class="px-5 py-8 text-center text-sm text-gray-400">No quote requests yet.</div>
        @else
            <div class="divide-y divide-gray-50">
                @foreach($recentQuotes as $q)
                    <a href="{{ route('admin.quotes.show', $q) }}"
                       class="flex items-center justify-between px-5 py-3.5 hover:bg-gray-50 transition-colors">
                        <div class="min-w-0">
                            <p class="text-sm font-semibold text-gray-900 truncate">{{ $q->company_name }}</p>
                            <p class="text-xs text-gray-400 truncate">{{ $q->ref_code }} · {{ $q->service }}</p>
                        </div>
                        @php $statusColors = ['new'=>'bg-blue-100 text-blue-700','reviewing'=>'bg-amber-100 text-amber-700','quoted'=>'bg-emerald-100 text-emerald-700','closed'=>'bg-gray-100 text-gray-500']; @endphp
                        <span class="text-[10px] font-bold uppercase px-2 py-1 rounded-full ml-3 shrink-0 {{ $statusColors[$q->status] ?? 'bg-gray-100 text-gray-500' }}">
                            {{ $q->status }}
                        </span>
                    </a>
                @endforeach
            </div>
        @endif
    </div>

    {{-- Recent Messages --}}
    <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">
        <div class="flex items-center justify-between px-5 py-4 border-b border-gray-100">
            <h3 class="text-sm font-semibold text-gray-900">Recent Messages</h3>
            <a href="{{ route('admin.messages.index') }}" class="text-xs text-amber-600 hover:text-amber-500 font-medium">View all →</a>
        </div>
        @if($recentMessages->isEmpty())
            <div class="px-5 py-8 text-center text-sm text-gray-400">No messages yet.</div>
        @else
            <div class="divide-y divide-gray-50">
                @foreach($recentMessages as $m)
                    <a href="{{ route('admin.messages.show', $m) }}"
                       class="flex items-center justify-between px-5 py-3.5 hover:bg-gray-50 transition-colors">
                        <div class="flex items-center gap-3 min-w-0">
                            @if(!$m->read)
                                <span class="w-2 h-2 rounded-full bg-amber-500 shrink-0"></span>
                            @else
                                <span class="w-2 h-2 rounded-full bg-gray-200 shrink-0"></span>
                            @endif
                            <div class="min-w-0">
                                <p class="text-sm font-semibold text-gray-900 truncate {{ !$m->read ? '' : 'font-medium' }}">{{ $m->name }}</p>
                                <p class="text-xs text-gray-400 truncate">{{ Str::limit($m->message, 45) }}</p>
                            </div>
                        </div>
                        <span class="text-xs text-gray-400 shrink-0 ml-3">{{ $m->created_at->diffForHumans(null, true) }}</span>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</div>

{{-- Quick actions --}}
<div>
    <p class="text-[11px] font-bold uppercase tracking-widest text-gray-400 mb-3">Quick Actions</p>
    <div class="flex flex-wrap gap-3">
        <a href="{{ route('admin.blog.create') }}"
           class="flex items-center gap-2 px-4 py-2 rounded-xl bg-amber-500 hover:bg-amber-400 text-white text-sm font-semibold transition-colors shadow-sm shadow-amber-100">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            New Blog Post
        </a>
        <a href="{{ route('admin.quotes.index') }}"
           class="flex items-center gap-2 px-4 py-2 rounded-xl bg-white hover:bg-gray-50 text-gray-700 text-sm font-medium border border-gray-200 transition-colors">
            Review Quotes
        </a>
        <a href="{{ route('admin.settings.index') }}"
           class="flex items-center gap-2 px-4 py-2 rounded-xl bg-white hover:bg-gray-50 text-gray-700 text-sm font-medium border border-gray-200 transition-colors">
            Site Settings
        </a>
    </div>
</div>

@endsection
