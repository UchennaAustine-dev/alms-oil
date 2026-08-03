<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuoteRequest;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = QuoteRequest::latest()->get();
        return view('admin.quotes.index', compact('quotes'));
    }

    public function show(QuoteRequest $quote)
    {
        return view('admin.quotes.show', compact('quote'));
    }

    public function update(Request $request, QuoteRequest $quote)
    {
        $data = $request->validate([
            'status' => 'required|in:new,reviewing,quoted,closed',
            'notes'  => 'nullable|string',
        ]);

        $quote->update($data);

        return redirect()->route('admin.quotes.show', $quote)
            ->with('success', 'Quote updated.');
    }

    public function destroy(QuoteRequest $quote)
    {
        $quote->delete();
        return redirect()->route('admin.quotes.index')
            ->with('success', 'Quote request deleted.');
    }
}
