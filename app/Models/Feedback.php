<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'client_id',
        'rating',
        'message',
        'status',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
