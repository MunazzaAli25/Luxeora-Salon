<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'date_of_birth',
        'Preferences',
        'preferred_stylist_id',
        'notes',
    ];

    public function preferredStylist()
    {
        return $this->belongsTo(Staff::class, 'preferred_stylist_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }

    /**
     * Accessor: returns first_name if set, otherwise splits name field.
     */
    public function getFirstNameAttribute($value)
    {
        if ($value) return $value;
        return explode(' ', $this->name ?? '')[0] ?? '';
    }

    /**
     * Accessor: returns last_name if set, otherwise uses last word of name field.
     */
    public function getLastNameAttribute($value)
    {
        if ($value) return $value;
        $parts = explode(' ', $this->name ?? '');
        return count($parts) > 1 ? implode(' ', array_slice($parts, 1)) : '';
    }
}