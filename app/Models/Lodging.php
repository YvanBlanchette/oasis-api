<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lodging extends Model
{
    protected $fillable = [
        'room_number',
        'category',
        'building',
        'capacity',
        'price',
    ];

    // A lodging has many room reservations
    public function roomReservations(): HasMany
    {
        return $this->hasMany(RoomReservation::class);
    }
}
