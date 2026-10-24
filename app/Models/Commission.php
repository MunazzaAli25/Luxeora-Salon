<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    protected $fillable = [
        'staff_id',
        'appointment_id',
        'service_cost',
        'rate',
        'amount',
        'status',
    ];

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
