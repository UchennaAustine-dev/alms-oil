<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'service'      => 'nullable|string|max:100',
            'product'      => 'nullable|string|max:100',
            'volume'       => 'nullable|string|max:100',
            'destination'  => 'nullable|string|max:100',
            'frequency'    => 'nullable|string|max:100',
            'company_name' => 'required|string|max:255',
            'contact_name' => 'required|string|max:100',
            'email'        => 'required|email|max:255',
            'phone'        => 'required|string|max:30',
        ]);

        // Generate reference code: ALMS-2026-XXXX
        $data['ref_code'] = 'ALMS-' . date('Y') . '-' . rand(1000, 9999);
        // Ensure uniqueness
        while (QuoteRequest::where('ref_code', $data['ref_code'])->exists()) {
            $data['ref_code'] = 'ALMS-' . date('Y') . '-' . rand(1000, 9999);
        }

        QuoteRequest::create($data);

        return back()->with([
            'quote_success' => true,
            'ref_code'      => $data['ref_code'],
        ]);
    }
}
