@php
  $nav = [
    ['route' => 'admin.dashboard',          'label' => 'Dashboard',      'exact' => true,  'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>'],
    ['route' => 'admin.blog.index',         'label' => 'Blog Posts',     'exact' => false, 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>'],
    ['route' => 'admin.quotes.index',       'label' => 'Quote Requests', 'exact' => false, 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 11h.01M12 11h.01M15 11h.01M4 19h16a2 2 0 002-2V7a2 2 0 00-2-2H4a2 2 0 00-2 2v10a2 2 0 002 2z"/>'],
    ['route' => 'admin.messages.index',     'label' => 'Messages',       'exact' => false, 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>'],
    ['route' => 'admin.testimonials.index', 'label' => 'Testimonials',   'exact' => false, 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>'],
    ['route' => 'admin.settings.index',     'label' => 'Site Settings',  'exact' => false, 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>'],
  ];
@endphp

<div class="flex flex-col h-full p-6">
  {{-- Logo --}}
  <div class="flex items-center justify-between mb-8">
    <img src="/branding/ALMS OIL PNG 01.png" alt="Alms Oil"
         class="h-9 w-auto object-contain object-left brightness-0 invert" />
    @if(isset($mobile) && $mobile)
      <button onclick="closeSidebar()" class="text-slate-400 hover:text-white">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
      </button>
    @endif
  </div>

  {{-- Admin badge --}}
  <div class="mb-6 px-3 py-2.5 rounded-xl bg-amber-500/10 border border-amber-500/20">
    <div class="text-[10px] font-bold uppercase tracking-widest text-amber-500/70 mb-0.5">Admin Portal</div>
    <div class="text-sm font-bold text-white truncate">{{ Auth::guard('admin')->user()->name ?? 'Administrator' }}</div>
    <div class="text-[11px] text-slate-400 truncate">{{ Auth::guard('admin')->user()->email ?? '' }}</div>
  </div>

  {{-- Nav links --}}
  <nav class="flex-1 space-y-1">
    @foreach($nav as $item)
      @php
        $active = $item['exact']
          ? request()->routeIs($item['route'])
          : request()->routeIs($item['route']) || request()->routeIs(str_replace('.index','',$item['route']).'.*');
      @endphp
      <a href="{{ route($item['route']) }}"
         class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200
                {{ $active ? 'bg-amber-500 text-slate-950' : 'text-slate-400 hover:text-white hover:bg-white/6' }}">
        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          {!! $item['icon'] !!}
        </svg>
        <span>{{ $item['label'] }}</span>
        @if($active)
          <svg class="w-3.5 h-3.5 ml-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        @endif
      </a>
    @endforeach
  </nav>

  {{-- Bottom actions --}}
  <div class="mt-6 pt-6 border-t border-white/8 space-y-1">
    <a href="{{ url('/') }}" target="_blank"
       class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm text-slate-400 hover:text-white hover:bg-white/6 transition-colors">
      <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
      <span>View Website</span>
    </a>
    <form method="POST" action="{{ route('admin.logout') }}">
      @csrf
      <button type="submit"
              class="w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm text-slate-400 hover:text-red-400 hover:bg-red-500/8 transition-colors cursor-pointer">
        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
        <span>Sign Out</span>
      </button>
    </form>
  </div>
</div>
