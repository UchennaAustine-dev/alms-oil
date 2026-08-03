<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    protected $fillable = [
        'ref_code',
        'service',
        'product',
        'volume',
        'destination',
        'frequency',
        'company_name',
        'contact_name',
        'email',
        'phone',
        'status',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}
