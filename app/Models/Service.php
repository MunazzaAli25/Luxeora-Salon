<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'category',
        'gender',
        'price',
        'duration',
        'description',
    ];

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
}
