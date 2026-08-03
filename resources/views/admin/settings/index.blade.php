@extends('layouts.admin')
@section('title', 'Site Settings')
@section('page-title', 'Site Settings')

@section('content')

<form method="POST" action="{{ route('admin.settings.update') }}" class="space-y-6 max-w-3xl">
    @csrf

    @php
        $ic = 'w-full px-4 py-2.5 rounded-xl bg-gray-50 border border-gray-200 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:border-amber-400 focus:bg-white focus:ring-2 focus:ring-amber-100 transition-all';
        $lc = 'text-[11px] font-bold uppercase tracking-wider text-gray-500 block mb-1.5';
        $groupLabels = ['hero' => 'Hero Section', 'stats' => 'Key Statistics', 'contact' => 'Contact Details', 'general' => 'General'];
    @endphp

    @forelse($settings as $group => $items)
        <div class="bg-white border border-gray-200 rounded-2xl p-6">
            <div class="flex items-center gap-3 mb-5 pb-4 border-b border-gray-100">
                <h3 class="text-sm font-semibold text-gray-900">{{ $groupLabels[$group] ?? ucfirst($group) }}</h3>
                <span class="text-[10px] text-gray-400 font-mono uppercase tracking-wider">{{ $group }}</span>
            </div>
            <div class="space-y-4">
                @foreach($items as $setting)
                    <div>
                        <label class="{{ $lc }}">{{ $setting->label }}</label>
                        @if(strlen($setting->value) > 80)
                            <textarea name="settings[{{ $setting->key }}]" rows="3"
                                      class="{{ $ic }} resize-none">{{ old('settings.' . $setting->key, $setting->value) }}</textarea>
                        @else
                            <input type="text" name="settings[{{ $setting->key }}]"
                                   value="{{ old('settings.' . $setting->key, $setting->value) }}"
                                   class="{{ $ic }}" />
                        @endif
                        <p class="text-[10px] text-gray-400 mt-1 font-mono">{{ $setting->key }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @empty
        <div class="bg-white border border-gray-200 rounded-2xl py-16 text-center text-sm text-gray-400">
            No settings found. Run <code class="text-xs bg-gray-100 px-1.5 py-0.5 rounded">php artisan db:seed</code> to populate defaults.
        </div>
    @endforelse

    @if($settings->isNotEmpty())
        <div class="flex items-center justify-between">
            <button type="submit"
                    class="px-8 py-2.5 rounded-xl bg-amber-500 hover:bg-amber-400 text-white text-sm font-semibold transition-colors shadow-sm shadow-amber-100">
                Save All Settings
            </button>
            <p class="text-xs text-gray-400">Changes are applied immediately to the live site.</p>
        </div>
    @endif
</form>

@endsection
