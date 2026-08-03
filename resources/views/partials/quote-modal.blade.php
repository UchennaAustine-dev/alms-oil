{{-- ── Supply Quote Request Modal — Alms Oil ── --}}
<div id="quote-modal" class="hidden fixed inset-0 z-50 bg-black/85 backdrop-blur-md flex items-end sm:items-center justify-center p-0 sm:p-4 overflow-hidden">
    <div id="quote-modal-backdrop" class="absolute inset-0"></div>

    <div class="relative w-full sm:max-w-2xl bg-[#0B332B] border border-white/15 rounded-t-3xl sm:rounded-3xl shadow-2xl flex flex-col max-h-[92vh] sm:max-h-[90vh]">

        {{-- Header --}}
        <div class="flex items-center justify-between p-5 sm:p-6 sm:pb-4 border-b border-white/10 shrink-0 bg-[#082620] rounded-t-3xl">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-2xl bg-[#F5850F]/20 text-[#F5850F] flex items-center justify-center shrink-0 border border-[#F5850F]/30">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 11h.01M12 11h.01M15 11h.01M4 19h16a2 2 0 002-2V7a2 2 0 00-2-2H4a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg sm:text-xl font-bold font-display text-white leading-tight">Request Energy Supply Quote</h3>
                    <p class="text-[11px] text-white/60">Alms Oil Nigeria Limited • Commercial Desk</p>
                </div>
            </div>
            <button id="quote-modal-close"
                    class="p-2 text-white/60 hover:text-white rounded-full bg-white/10 hover:bg-white/20 transition-colors cursor-pointer shrink-0">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Body --}}
        <div class="overflow-y-auto flex-1 p-5 sm:p-6 text-white">

            @if (session('quote_success'))
                {{-- Success state --}}
                <div class="text-center py-8 space-y-6 animate-fadeIn text-white">
                    <div class="w-16 h-16 rounded-full bg-emerald-500/20 border border-emerald-500/40 text-emerald-400 flex items-center justify-center mx-auto">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-2xl font-bold font-display text-white">Supply Quote Request Received!</h4>
                        <p class="text-white/80 text-sm max-w-md mx-auto">
                            Our commercial petroleum trading desk at Alms Oil Nigeria Limited has received your inquiry.
                        </p>
                    </div>
                    <div class="p-4 rounded-2xl bg-[#082620] border border-white/10 text-left max-w-md mx-auto space-y-2 text-xs text-white/80">
                        <div class="flex justify-between border-b border-white/10 pb-2">
                            <span>Ref Code:</span>
                            <span class="font-mono text-[#F5850F] font-bold">{{ session('ref_code') }}</span>
                        </div>
                    </div>
                    <p class="text-xs text-white/60">A trading officer will contact you within 2 hours.</p>
                </div>
            @else
                <form method="POST" action="{{ route('quote.store') }}" class="space-y-5">
                    @csrf

                    @if ($errors->any())
                        <div class="px-4 py-3 rounded-2xl bg-red-500/10 border border-red-500/30 text-red-300 text-xs">
                            @foreach ($errors->all() as $e)<p>{{ $e }}</p>@endforeach
                        </div>
                    @endif

                    @php
                        $ic = 'w-full px-4 py-3 rounded-xl bg-[#082620] border border-white/15 text-xs sm:text-sm text-white focus:outline-none focus:border-[#F5850F] placeholder:text-white/40 transition-colors';
                        $lc = 'text-[11px] font-bold uppercase tracking-wider text-[#F5850F] block mb-1.5';
                    @endphp

                    {{-- Service --}}
                    <div class="space-y-1.5">
                        <label class="{{ $lc }}">1. Select Energy Service Category</label>
                        <select name="service" class="{{ $ic }}">
                            <option value="Petroleum Supply & Trading">Petroleum Supply &amp; Trading</option>
                            <option value="Logistics & Distribution">Logistics &amp; Fleet Haulage</option>
                            <option value="Engineering & Industrial Services">Engineering &amp; Industrial Services</option>
                            <option value="Energy Infrastructure Solutions">Energy Infrastructure Solutions</option>
                        </select>
                    </div>

                    {{-- Product & Volume --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1.5">
                            <label class="{{ $lc }}">Petroleum Product</label>
                            <select name="product" class="{{ $ic }}">
                                <option>Automotive Gas Oil (AGO/Diesel)</option>
                                <option>Premium Motor Spirit (PMS)</option>
                                <option>Dual Purpose Kerosene (DPK)</option>
                                <option>Aviation Turbine Kerosene (ATK/Jet A-1)</option>
                                <option>Low Pour Fuel Oil (LPFO)</option>
                                <option>Liquefied Petroleum Gas (LPG)</option>
                                <option>Base Oils &amp; Bitumen</option>
                            </select>
                        </div>
                        <div class="space-y-1.5">
                            <label class="{{ $lc }}">Estimated Volume (Liters / MT)</label>
                            <select name="volume" class="{{ $ic }}">
                                <option value="10000">10,000 Liters (Mini Tanker)</option>
                                <option value="33000" selected>33,000 Liters (Standard Tanker)</option>
                                <option value="45000">45,000 Liters (Heavy Bulk Truck)</option>
                                <option value="100000">100,000+ Liters (Depot Bulk)</option>
                            </select>
                        </div>
                    </div>

                    {{-- Location & Frequency --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1.5">
                            <label class="{{ $lc }}">Delivery Destination</label>
                            <select name="destination" class="{{ $ic }}">
                                <option>Lagos State (Industrial Zone)</option>
                                <option>FCT Abuja (Commercial Hub)</option>
                                <option>Rivers State (Port Harcourt)</option>
                                <option>Ogun State (Industrial Corridor)</option>
                                <option>Kano State</option>
                                <option>Other Nigerian State / West Africa</option>
                            </select>
                        </div>
                        <div class="space-y-1.5">
                            <label class="{{ $lc }}">Delivery Schedule</label>
                            <select name="frequency" class="{{ $ic }}">
                                <option>One-Off Spot Order</option>
                                <option>Weekly Scheduled Supply</option>
                                <option>Monthly Retainer Contract</option>
                                <option>24/7 Emergency Supply</option>
                            </select>
                        </div>
                    </div>

                    {{-- Contact Details --}}
                    <div class="space-y-4 pt-3 border-t border-white/10">
                        <label class="{{ $lc }}">2. Company Contact Details</label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="text" name="company_name" required placeholder="Company Name *" class="{{ $ic }}" />
                            <input type="text" name="contact_name" required placeholder="Contact Officer Name *" class="{{ $ic }}" />
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="email" name="email" required placeholder="Official Email Address *" class="{{ $ic }}" />
                            <input type="tel" name="phone" required placeholder="Phone Number *" class="{{ $ic }}" />
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-3 border-t border-white/10">
                        <div class="flex items-center gap-2 text-xs text-white/60">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                            <span>Encrypted &amp; PIA Protected Submission</span>
                        </div>
                        <button type="submit"
                                class="w-full sm:w-auto px-8 py-3.5 bg-[#F5850F] hover:bg-[#e07708] text-white font-bold text-xs uppercase tracking-wider rounded-full shadow-lg transition-all cursor-pointer">
                            Submit Quote Request
                        </button>
                    </div>

                </form>
            @endif

        </div>

    </div>
</div>
