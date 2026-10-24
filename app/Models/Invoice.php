<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'client_id',
        'invoice_number',
        'amount',
        'invoice_date',
        'status',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
