@extends('layouts.app')
@section('title', 'Insights & Industry News | Alms Oil Nigeria Limited')

@section('content')

{{-- Breadcrumb --}}
<div class="border-b border-[#efefef]">
  <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10 py-5 flex items-center gap-2 text-[13px] text-[#999]">
    <a href="{{ route('home') }}" class="hover:text-[#C8922A] transition-colors">Home</a>
    <span>/</span>
    <span class="text-[#0f0f0f]">Insights</span>
  </div>
</div>

{{-- Page header --}}
<section class="py-14 sm:py-20 border-b border-[#efefef] bg-white">
  <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
    <div class="flex items-center gap-3 mb-6">
      <div class="w-8 h-px bg-[#C8922A]"></div>
      <span class="text-[11px] font-semibold tracking-[0.2em] uppercase text-[#C8922A]">Alms Oil Editorial</span>
    </div>
    <h1 class="font-display font-bold text-[#0f0f0f] leading-[1.05] tracking-tight"
        style="font-size:clamp(2rem,4vw,3.5rem)">Petroleum industry insights.</h1>
  </div>
</section>

<div class="max-w-7xl mx-auto w-full px-5 sm:px-8 lg:px-10 py-14 sm:py-20 bg-white">

  {{-- Featured post --}}
  @if($featured)
    <div class="mb-16">
      <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#999] mb-7">Featured</p>
      <a href="{{ route('blog.show', $featured->slug) }}"
         class="group grid grid-cols-1 lg:grid-cols-2 gap-px bg-[#efefef]">
        <div class="bg-[#0f0f0f] p-8 sm:p-10 lg:p-12 flex flex-col justify-between min-h-64">
          <div>
            <span class="text-[10px] font-bold tracking-[0.18em] uppercase text-[#C8922A] block mb-5">
              {{ $featured->category }}
            </span>
            <h2 class="font-display font-bold text-white leading-snug group-hover:text-[#C8922A] transition-colors"
                style="font-size:clamp(1.25rem,2.5vw,1.875rem)">
              {{ $featured->title }}
            </h2>
          </div>
          <div class="flex items-center gap-3 mt-6 text-[#666] text-[12px]">
            <span>{{ $featured->author }}</span>
            <span>·</span>
            <span>{{ $featured->published_at?->format('M d, Y') ?? $featured->created_at->format('M d, Y') }}</span>
            <span>·</span>
            <span>{{ $featured->read_time }}</span>
          </div>
        </div>
        <div class="bg-white p-8 sm:p-10 lg:p-12 flex flex-col justify-between">
          <p class="text-[#555] text-base leading-relaxed">{{ $featured->excerpt }}</p>
          <div class="flex items-center gap-2 mt-8 text-[13px] font-semibold text-[#C8922A] group-hover:gap-3 transition-all">
            Read article
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
          </div>
        </div>
      </a>
    </div>
  @endif

  {{-- All articles --}}
  <div>
    <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#999] mb-7">All Articles</p>
    @if($posts->isEmpty() && !$featured)
      <p class="text-[#999] text-sm py-12 text-center">No articles published yet.</p>
    @else
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-px bg-[#efefef]">
        @foreach($posts as $post)
          <a href="{{ route('blog.show', $post->slug) }}"
             class="group bg-white p-7 sm:p-8 flex flex-col hover:bg-[#f8f8f6] transition-colors">
            <span class="text-[10px] font-bold tracking-[0.18em] uppercase text-[#C8922A] mb-5">{{ $post->category }}</span>
            <h3 class="font-display font-bold text-[#0f0f0f] text-base sm:text-lg leading-snug group-hover:text-[#C8922A] transition-colors flex-1 mb-5">
              {{ $post->title }}
            </h3>
            <div class="flex items-center justify-between pt-5 border-t border-[#efefef] mt-auto">
              <div class="text-[11px] text-[#999]">
                <span>{{ $post->published_at?->format('M d, Y') ?? $post->created_at->format('M d, Y') }}</span>
                <span class="mx-2">·</span>
                <span>{{ $post->read_time }}</span>
              </div>
              <svg class="w-4 h-4 text-[#ccc] group-hover:text-[#C8922A] transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
            </div>
          </a>
        @endforeach
      </div>
    @endif
  </div>
</div>

@endsection
