@extends('layouts.admin')
@section('title', 'Quote Requests')
@section('page-title', 'Quote Requests')

@section('content')

@php $statusColors = ['new'=>'bg-blue-100 text-blue-700','reviewing'=>'bg-amber-100 text-amber-700','quoted'=>'bg-emerald-100 text-emerald-700','closed'=>'bg-gray-100 text-gray-500']; @endphp

<div class="flex items-center justify-between mb-5">
    <p class="text-sm text-gray-500">{{ $quotes->count() }} total · {{ $quotes->where('status','new')->count() }} new</p>
</div>

<div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">
    @if($quotes->isEmpty())
        <div class="py-16 text-center text-sm text-gray-400">No quote requests yet.</div>
    @else
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-gray-100 text-left">
                        <th class="px-5 py-3 text-[11px] font-bold uppercase tracking-wider text-gray-400">Ref / Company</th>
                        <th class="px-4 py-3 text-[11px] font-bold uppercase tracking-wider text-gray-400 hidden md:table-cell">Service</th>
                        <th class="px-4 py-3 text-[11px] font-bold uppercase tracking-wider text-gray-400 hidden lg:table-cell">Contact</th>
                        <th class="px-4 py-3 text-[11px] font-bold uppercase tracking-wider text-gray-400">Status</th>
                        <th class="px-4 py-3 text-[11px] font-bold uppercase tracking-wider text-gray-400 hidden lg:table-cell">Date</th>
                        <th class="px-4 py-3 text-[11px] font-bold uppercase tracking-wider text-gray-400 text-right">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @foreach($quotes as $q)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-5 py-4">
                                <p class="font-semibold text-gray-900">{{ $q->company_name }}</p>
                                <p class="text-xs text-gray-400 font-mono mt-0.5">{{ $q->ref_code }}</p>
                            </td>
                            <td class="px-4 py-4 hidden md:table-cell text-gray-500 text-xs">{{ $q->service ?: '—' }}</td>
                            <td class="px-4 py-4 hidden lg:table-cell">
                                <p class="text-gray-700 text-xs font-medium">{{ $q->contact_name }}</p>
                                <p class="text-gray-400 text-xs">{{ $q->email }}</p>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-[10px] font-bold uppercase px-2.5 py-1 rounded-full {{ $statusColors[$q->status] ?? 'bg-gray-100 text-gray-500' }}">
                                    {{ $q->status }}
                                </span>
                            </td>
                            <td class="px-4 py-4 hidden lg:table-cell text-gray-400 text-xs">{{ $q->created_at->format('M d, Y') }}</td>
                            <td class="px-4 py-4 text-right">
                                <a href="{{ route('admin.quotes.show', $q) }}"
                                   class="text-xs font-semibold text-amber-600 hover:text-amber-500">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>

@endsection
