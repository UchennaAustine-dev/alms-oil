@extends('layouts.admin')
@section('title', 'Message from ' . $message->name)
@section('page-title', 'Message Details')

@section('content')
<div class="max-w-2xl">
    <a href="{{ route('admin.messages.index') }}" class="inline-flex items-center gap-1.5 text-sm text-gray-500 hover:text-gray-900 mb-5 transition-colors">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
        Back to messages
    </a>

    <div class="bg-white border border-gray-200 rounded-2xl p-6 space-y-5">

        {{-- Sender --}}
        <div class="flex items-start justify-between gap-4">
            <div>
                <p class="text-base font-bold text-gray-900">{{ $message->name }}</p>
                <a href="mailto:{{ $message->email }}" class="text-sm text-amber-600 hover:text-amber-500">{{ $message->email }}</a>
                @if($message->phone)
                    <p class="text-sm text-gray-500 mt-0.5">{{ $message->phone }}</p>
                @endif
                @if($message->company)
                    <p class="text-xs text-gray-400 mt-0.5">{{ $message->company }}</p>
                @endif
            </div>
            <p class="text-xs text-gray-400 shrink-0">{{ $message->created_at->format('M j, Y · g:i A') }}</p>
        </div>

        <div class="h-px bg-gray-100"></div>

        {{-- Message body --}}
        <div class="bg-gray-50 rounded-xl p-5">
            <p class="text-gray-800 text-sm leading-relaxed whitespace-pre-wrap">{{ $message->message }}</p>
        </div>

        {{-- Actions --}}
        <div class="flex items-center justify-between pt-1">
            <a href="mailto:{{ $message->email }}?subject=Re: Your Enquiry — Alms Oil Nigeria Limited"
               class="inline-flex items-center gap-2 px-5 py-2 rounded-xl bg-amber-500 hover:bg-amber-400 text-white text-sm font-semibold transition-colors shadow-sm shadow-amber-100">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Reply via Email
            </a>
            <form method="POST" action="{{ route('admin.messages.destroy', $message) }}" onsubmit="return confirm('Delete this message?')">
                @csrf @method('DELETE')
                <button type="submit" class="text-sm text-red-500 hover:text-red-700 font-medium transition-colors">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
