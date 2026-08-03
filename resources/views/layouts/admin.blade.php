<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Dashboard') — Alms Oil Admin</title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-gray-50 text-gray-900 antialiased" style="font-family:var(--font-sans)">

<div class="flex h-full overflow-hidden">

    {{-- ── Sidebar ── --}}
    <aside id="admin-sidebar"
           class="hidden lg:flex flex-col w-64 shrink-0 bg-white border-r border-gray-200 overflow-y-auto">

        {{-- Logo --}}
        <div class="flex items-center gap-3 px-6 py-5 border-b border-gray-100">
            <img src="/branding/ALMS OIL PNG 01.png" alt="Alms Oil"
                 class="h-8 w-auto object-contain object-left" />
        </div>

        {{-- Admin badge --}}
        <div class="mx-4 mt-5 mb-2 px-3 py-3 rounded-xl bg-amber-50 border border-amber-100">
            <div class="text-[10px] font-bold uppercase tracking-widest text-amber-600 mb-0.5">Admin Portal</div>
            <div class="text-sm font-semibold text-gray-900 truncate">{{ Auth::guard('admin')->user()->name }}</div>
            <div class="text-[11px] text-gray-400 truncate">{{ Auth::guard('admin')->user()->email }}</div>
        </div>

        {{-- Nav --}}
        <nav class="flex-1 px-3 py-3 space-y-0.5">
            @php
                $navItems = [
                    ['route' => 'admin.dashboard',          'label' => 'Dashboard',      'icon' => 'grid'],
                    ['route' => 'admin.blog.index',         'label' => 'Blog Posts',     'icon' => 'file-text'],
                    ['route' => 'admin.quotes.index',       'label' => 'Quote Requests', 'icon' => 'inbox'],
                    ['route' => 'admin.messages.index',     'label' => 'Messages',       'icon' => 'mail'],
                    ['route' => 'admin.testimonials.index', 'label' => 'Testimonials',   'icon' => 'star'],
                    ['route' => 'admin.settings.index',     'label' => 'Settings',       'icon' => 'settings'],
                ];
                $icons = [
                    'grid'      => '<rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>',
                    'file-text' => '<path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14,2 14,8 20,8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10,9 9,9 8,9"/>',
                    'inbox'     => '<polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/><path d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z"/>',
                    'mail'      => '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>',
                    'star'      => '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>',
                    'settings'  => '<circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/>',
                    'external'  => '<path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/>',
                    'logout'    => '<path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/>',
                ];
            @endphp

            @foreach($navItems as $item)
                @php
                    $active = request()->routeIs($item['route']) || request()->routeIs($item['route'].'*');
                @endphp
                <a href="{{ route($item['route']) }}"
                   class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-all {{ $active ? 'bg-amber-500 text-white shadow-sm shadow-amber-200' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-100' }}">
                    <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">{!! $icons[$item['icon']] !!}</svg>
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>

        {{-- Bottom --}}
        <div class="px-3 py-4 border-t border-gray-100 space-y-0.5">
            <a href="{{ url('/') }}" target="_blank"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-100 transition-all">
                <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">{!! $icons['external'] !!}</svg>
                View Website
            </a>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit"
                        class="w-full flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-red-500 hover:text-red-700 hover:bg-red-50 transition-all">
                    <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">{!! $icons['logout'] !!}</svg>
                    Sign Out
                </button>
            </form>
        </div>
    </aside>

    {{-- ── Mobile overlay + drawer ── --}}
    <div id="admin-mobile-overlay"
         class="fixed inset-0 z-40 bg-black/40 backdrop-blur-sm lg:hidden opacity-0 pointer-events-none transition-opacity duration-200"></div>

    <div id="admin-mobile-drawer"
         class="fixed inset-y-0 left-0 z-50 w-[280px] bg-white border-r border-gray-200 flex flex-col lg:hidden -translate-x-full transition-transform duration-300 overflow-y-auto">
        <div class="flex items-center justify-between px-5 py-4 border-b border-gray-100">
            <img src="/branding/ALMS OIL PNG 01.png" alt="Alms Oil" class="h-7 w-auto object-contain object-left" />
            <button id="admin-drawer-close" class="p-1.5 text-gray-500 hover:text-gray-900">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
        <nav class="flex-1 px-3 py-3 space-y-0.5">
            @foreach($navItems as $item)
                @php $active = request()->routeIs($item['route']) || request()->routeIs($item['route'].'*'); @endphp
                <a href="{{ route($item['route']) }}"
                   class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-all {{ $active ? 'bg-amber-500 text-white' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-100' }}">
                    <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">{!! $icons[$item['icon']] !!}</svg>
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>
    </div>

    {{-- ── Main ── --}}
    <div class="flex-1 flex flex-col overflow-hidden min-w-0">

        {{-- Top bar --}}
        <header class="h-14 shrink-0 flex items-center justify-between px-4 sm:px-6 bg-white border-b border-gray-200">
            <div class="flex items-center gap-3">
                <button id="admin-menu-btn" class="lg:hidden p-1.5 text-gray-500 hover:text-gray-900 rounded-lg hover:bg-gray-100 transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
                <h1 class="text-sm font-semibold text-gray-900">@yield('page-title', 'Dashboard')</h1>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-amber-500 flex items-center justify-center text-white font-bold text-xs shrink-0">
                    {{ strtoupper(substr(Auth::guard('admin')->user()->name, 0, 1)) }}
                </div>
            </div>
        </header>

        {{-- Flash --}}
        @if(session('success'))
            <div class="mx-4 sm:mx-6 mt-4 px-4 py-3 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl text-sm flex items-center gap-2">
                <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="mx-4 sm:mx-6 mt-4 px-4 py-3 bg-red-50 border border-red-200 text-red-700 rounded-xl text-sm">{{ session('error') }}</div>
        @endif

        {{-- Content --}}
        <main class="flex-1 overflow-y-auto p-4 sm:p-6">
            @yield('content')
        </main>
    </div>
</div>

<script>
    const btn = document.getElementById('admin-menu-btn');
    const overlay = document.getElementById('admin-mobile-overlay');
    const drawer = document.getElementById('admin-mobile-drawer');
    const closeBtn = document.getElementById('admin-drawer-close');
    function openDrawer() { drawer.classList.remove('-translate-x-full'); overlay.classList.remove('opacity-0','pointer-events-none'); document.body.style.overflow='hidden'; }
    function closeDrawer() { drawer.classList.add('-translate-x-full'); overlay.classList.add('opacity-0','pointer-events-none'); document.body.style.overflow=''; }
    btn?.addEventListener('click', openDrawer);
    closeBtn?.addEventListener('click', closeDrawer);
    overlay?.addEventListener('click', closeDrawer);
    drawer?.querySelectorAll('a').forEach(a => a.addEventListener('click', closeDrawer));
</script>

</body>
</html>
