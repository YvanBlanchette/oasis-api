<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Activity extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'status',
        'pricePerAdult',
        'pricePerChildren',
        'durationInMinutes',
        'ageRestriction',
        'isIncluded',
        'notes'
    ];

    // An activity has many reservations
    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
