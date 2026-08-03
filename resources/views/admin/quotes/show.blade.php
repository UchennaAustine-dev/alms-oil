@extends('layouts.admin')
@section('title', 'Quote ' . $quote->ref_code)
@section('page-title', 'Quote Request')

@section('content')
<div class="max-w-2xl">
    <a href="{{ route('admin.quotes.index') }}" class="inline-flex items-center gap-1.5 text-sm text-gray-500 hover:text-gray-900 mb-5 transition-colors">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
        Back to quotes
    </a>

    @php $statusColors = ['new'=>'bg-blue-100 text-blue-700','reviewing'=>'bg-amber-100 text-amber-700','quoted'=>'bg-emerald-100 text-emerald-700','closed'=>'bg-gray-100 text-gray-500']; @endphp

    <div class="bg-white border border-gray-200 rounded-2xl p-6 space-y-6">

        {{-- Header --}}
        <div class="flex items-start justify-between">
            <div>
                <p class="text-lg font-bold text-gray-900">{{ $quote->company_name }}</p>
                <p class="text-sm font-mono text-amber-600 mt-0.5">{{ $quote->ref_code }}</p>
            </div>
            <span class="text-[10px] font-bold uppercase px-3 py-1.5 rounded-full {{ $statusColors[$quote->status] ?? 'bg-gray-100 text-gray-500' }}">
                {{ $quote->status }}
            </span>
        </div>

        {{-- Details grid --}}
        <div class="grid grid-cols-2 gap-4 text-sm">
            @foreach([
                'Contact'     => $quote->contact_name,
                'Email'       => $quote->email,
                'Phone'       => $quote->phone,
                'Service'     => $quote->service,
                'Product'     => $quote->product,
                'Volume'      => $quote->volume,
                'Destination' => $quote->destination,
                'Frequency'   => $quote->frequency,
                'Submitted'   => $quote->created_at->format('F j, Y'),
            ] as $label => $value)
                @if($value)
                    <div class="bg-gray-50 rounded-xl p-3">
                        <p class="text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-0.5">{{ $label }}</p>
                        <p class="text-gray-800 font-medium text-sm">{{ $value }}</p>
                    </div>
                @endif
            @endforeach
        </div>

        {{-- Update form --}}
        <div class="border-t border-gray-100 pt-5">
            <form method="POST" action="{{ route('admin.quotes.update', $quote) }}" class="space-y-4">
                @csrf @method('PATCH')
                @php $ic = 'w-full px-4 py-2.5 rounded-xl bg-gray-50 border border-gray-200 text-sm text-gray-900 focus:outline-none focus:border-amber-400 focus:bg-white focus:ring-2 focus:ring-amber-100 transition-all'; @endphp

                <div>
                    <label class="text-[11px] font-bold uppercase tracking-wider text-gray-500 block mb-1.5">Status</label>
                    <select name="status" class="{{ $ic }}">
                        @foreach(['new','reviewing','quoted','closed'] as $s)
                            <option value="{{ $s }}" {{ $quote->status === $s ? 'selected' : '' }}>{{ ucfirst($s) }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="text-[11px] font-bold uppercase tracking-wider text-gray-500 block mb-1.5">Internal Notes</label>
                    <textarea name="notes" rows="4" placeholder="Add internal notes about this quote…" class="{{ $ic }} resize-none">{{ old('notes', $quote->notes) }}</textarea>
                </div>

                <div class="flex items-center justify-between pt-1">
                    <button type="submit"
                            class="px-5 py-2 rounded-xl bg-amber-500 hover:bg-amber-400 text-white text-sm font-semibold transition-colors shadow-sm shadow-amber-100">
                        Save Changes
                    </button>
                    <form method="POST" action="{{ route('admin.quotes.destroy', $quote) }}" onsubmit="return confirm('Delete this quote?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-sm text-red-500 hover:text-red-700 font-medium transition-colors">Delete</button>
                    </form>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
