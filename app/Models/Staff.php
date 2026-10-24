<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'role',
        'schedule',
        'commission_rate',
        'status',
    ];

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function commissions(){
        return $this->hasMany(Commission::class);
    }
}
