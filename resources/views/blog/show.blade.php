@extends('layouts.app')
@section('title', $post->title . ' | Alms Oil Nigeria Limited')

@section('content')

{{-- Article header --}}
<div class="bg-[#0f0f0f] relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none"
       style="background:radial-gradient(ellipse 55% 60% at 20% 110%,rgba(200,146,42,0.14) 0%,transparent 65%)"></div>

  <div class="relative max-w-7xl mx-auto px-5 sm:px-8 lg:px-10 pt-10 pb-14 sm:pt-14 sm:pb-20">
    {{-- Breadcrumb --}}
    <div class="flex flex-wrap items-center gap-1.5 text-[#666] text-[13px] mb-8">
      <a href="{{ route('home') }}" class="hover:text-[#C8922A] transition-colors shrink-0">Home</a>
      <span class="shrink-0">/</span>
      <a href="{{ route('blog.index') }}" class="hover:text-[#C8922A] transition-colors shrink-0">Insights</a>
      <span class="shrink-0">/</span>
      <span class="text-[#888] truncate max-w-[200px] sm:max-w-none">{{ $post->title }}</span>
    </div>

    <div class="max-w-3xl">
      <div class="flex items-center gap-3 mb-6">
        <div class="w-8 h-px bg-[#C8922A]"></div>
        <span class="text-[11px] font-semibold tracking-[0.2em] uppercase text-[#C8922A]">{{ $post->category }}</span>
      </div>
      <h1 class="font-display font-bold text-white leading-[1.08] tracking-tight mb-6"
          style="font-size:clamp(1.75rem,4vw,3rem)">{{ $post->title }}</h1>
      <p class="text-[#888] text-base sm:text-lg leading-relaxed max-w-2xl">{{ $post->excerpt }}</p>

      <div class="flex flex-wrap items-center gap-x-6 gap-y-3 mt-8 pt-8 border-t border-white/10">
        <div class="flex items-center gap-3">
          <div class="w-8 h-8 bg-[#C8922A]/15 border border-[#C8922A]/25 flex items-center justify-center shrink-0">
            <svg class="w-3.5 h-3.5 text-[#C8922A]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
          </div>
          <div>
            <p class="text-[13px] font-semibold text-white leading-none">{{ $post->author }}</p>
            <p class="text-[11px] text-[#666] mt-0.5">{{ $post->author_role }}</p>
          </div>
        </div>
        <div class="w-px h-7 bg-white/10 hidden sm:block"></div>
        @if($post->published_at)
          <div class="flex items-center gap-1.5 text-[#666] text-[13px]">
            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            <span>{{ $post->published_at->format('M d, Y') }}</span>
          </div>
          <div class="w-px h-4 bg-white/10 hidden sm:block"></div>
        @endif
        <div class="flex items-center gap-1.5 text-[#666] text-[13px]">
          <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <span>{{ $post->read_time }}</span>
        </div>
      </div>
    </div>
  </div>
  <div class="h-8" style="background:linear-gradient(to bottom,transparent,white)"></div>
</div>

{{-- Article body --}}
<div class="max-w-7xl mx-auto w-full px-5 sm:px-8 lg:px-10 py-10 sm:py-14 bg-white">
  <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">

    {{-- Main content --}}
    <article class="lg:col-span-8 min-w-0">
      <a href="{{ route('blog.index') }}"
         class="inline-flex items-center gap-2 text-[13px] font-semibold text-[#999] hover:text-[#C8922A] transition-colors mb-8 lg:hidden">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
        All Articles
      </a>

      <div class="blog-content">{!! $post->body !!}</div>

      <div class="mt-12 pt-8 border-t border-[#efefef]">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
          <a href="{{ route('blog.index') }}"
             class="inline-flex items-center gap-2 text-[13px] font-semibold text-[#555] hover:text-[#C8922A] transition-colors">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to All Articles
          </a>
          <a href="{{ route('contact') }}"
             class="inline-flex items-center gap-2 text-[13px] font-semibold text-[#C8922A] hover:text-[#b07d22] transition-colors">
            Contact Alms Oil
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
          </a>
        </div>
      </div>
    </article>

    {{-- Sidebar --}}
    <aside class="lg:col-span-4 space-y-6">
      <a href="{{ route('blog.index') }}"
         class="hidden lg:inline-flex items-center gap-2 text-[13px] font-semibold text-[#999] hover:text-[#C8922A] transition-colors">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
        All Articles
      </a>

      {{-- CTA panel --}}
      <div class="bg-[#0f0f0f] overflow-hidden">
        <div class="h-0.5 bg-[#C8922A]"></div>
        <div class="p-6 space-y-4">
          <h3 class="text-base font-bold font-display text-white">Need Petroleum Supply?</h3>
          <p class="text-[#888] text-[13px] leading-relaxed">
            Talk to our commercial team about supply, logistics, or infrastructure requirements.
          </p>
          <a href="{{ route('contact') }}"
             class="inline-flex items-center gap-2 text-[13px] font-semibold text-[#C8922A] hover:text-[#e0a840] transition-colors">
            Contact Alms Oil
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
          </a>
        </div>
      </div>

      {{-- Related articles --}}
      @if($related->isNotEmpty())
        <div class="space-y-3">
          <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#999]">More Articles</p>
          <div class="flex flex-col gap-px bg-[#efefef]">
            @foreach($related as $r)
              <a href="{{ route('blog.show', $r->slug) }}"
                 class="group bg-white p-5 flex flex-col hover:bg-[#f8f8f6] transition-colors">
                <span class="text-[10px] font-bold tracking-[0.18em] uppercase text-[#C8922A] mb-2">{{ $r->category }}</span>
                <p class="text-[13px] font-bold text-[#0f0f0f] group-hover:text-[#C8922A] leading-snug transition-colors mb-3">{{ $r->title }}</p>
                <div class="flex items-center gap-1.5 text-[11px] text-[#999]">
                  <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                  <span>{{ $r->read_time }}</span>
                </div>
              </a>
            @endforeach
          </div>
        </div>
      @endif

      {{-- Services quick link --}}
      <div class="bg-[#faf7f2] border border-[#C8922A]/20 p-5 space-y-3">
        <h4 class="text-[13px] font-bold text-[#0f0f0f]">Our Services</h4>
        <p class="text-[12px] text-[#777] leading-relaxed">
          Petroleum supply, logistics distribution, and energy infrastructure across Nigeria.
        </p>
        <a href="{{ route('services.petroleum') }}"
           class="inline-flex items-center gap-1.5 text-[12px] font-semibold text-[#C8922A] hover:text-[#b07d22] transition-colors">
          Explore Services
          <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
        </a>
      </div>
    </aside>
  </div>
</div>

@endsection
