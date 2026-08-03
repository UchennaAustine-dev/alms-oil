<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In — Alms Oil Admin</title>
    <meta name="robots" content="noindex, nofollow" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full flex items-center justify-center bg-gray-50 px-4" style="font-family:var(--font-sans)">

<div class="w-full max-w-sm">
    {{-- Logo --}}
    <div class="flex justify-center mb-8">
        <img src="/branding/ALMS OIL PNG 01.png" alt="Alms Oil Nigeria Limited"
             class="h-10 w-auto object-contain" />
    </div>

    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-8">
        <div class="mb-6">
            <div class="flex items-center gap-2 mb-1">
                <svg class="w-4 h-4 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                <span class="text-[11px] font-bold uppercase tracking-widest text-amber-600">Admin Portal</span>
            </div>
            <h1 class="text-2xl font-bold font-display text-gray-900">Sign in</h1>
            <p class="text-gray-500 text-sm mt-1">Access the Alms Oil management dashboard.</p>
        </div>

        @if($errors->any())
            <div class="mb-5 px-4 py-3 rounded-xl bg-red-50 border border-red-200 text-red-700 text-sm flex items-center gap-2">
                <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-4">
            @csrf

            <div>
                <label class="text-[11px] font-bold uppercase tracking-wider text-gray-500 block mb-1.5">Email Address</label>
                <input type="email" name="email" required autocomplete="email"
                       value="{{ old('email') }}"
                       placeholder="admin@almsoil.com"
                       class="w-full px-4 py-2.5 rounded-xl bg-gray-50 border border-gray-200 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:border-amber-400 focus:bg-white focus:ring-2 focus:ring-amber-100 transition-all" />
            </div>

            <div>
                <label class="text-[11px] font-bold uppercase tracking-wider text-gray-500 block mb-1.5">Password</label>
                <input type="password" name="password" required autocomplete="current-password"
                       placeholder="••••••••••••"
                       class="w-full px-4 py-2.5 rounded-xl bg-gray-50 border border-gray-200 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:border-amber-400 focus:bg-white focus:ring-2 focus:ring-amber-100 transition-all" />
            </div>

            <button type="submit"
                    class="w-full flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl bg-amber-500 hover:bg-amber-400 active:bg-amber-600 text-white font-semibold text-sm transition-all shadow-sm shadow-amber-200 mt-2">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                Sign In
            </button>
        </form>
    </div>

    <p class="text-center text-xs text-gray-400 mt-6">
        Alms Oil Nigeria Limited &middot; Internal Admin Portal
    </p>
</div>

</body>
</html>
