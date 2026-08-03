<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Alms Oil Nigeria Limited | Powering Industry. Delivering Energy. Building Trust.')</title>
    <meta name="description" content="@yield('description', 'Alms Oil Nigeria Limited provides integrated petroleum supply, bulk fuel trading, logistics, engineering services, and energy infrastructure across Nigeria.')">
    <link rel="icon" href="/branding/Frame 001.png" type="image/png" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="min-h-full flex flex-col bg-[#f8fafc] text-slate-900 selection:bg-amber-500 selection:text-slate-950">

    @include('partials.header')

    <main class="grow">
        @yield('content')
    </main>

    @include('partials.quote-modal')

    @include('partials.footer')

    {{-- Scroll to top --}}
    <button id="scroll-top-btn" aria-label="Scroll to top"
            class="fixed bottom-6 right-6 z-50 w-11 h-11 rounded-full bg-amber-500 text-slate-950 shadow-lg shadow-amber-500/30 flex items-center justify-center hover:bg-amber-400 hover:scale-110 active:scale-95 transition-all duration-300 cursor-pointer opacity-0 pointer-events-none">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>
        </svg>
    </button>

    @stack('scripts')
</body>
</html>
