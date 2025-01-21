<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoomReservation extends Model
{
    protected $fillable = [
        'lodging_id',
        'user_id',
        'arrival_date',
        'departure_date',
        'nb_guests',
        'total_price',
    ];

    // A room reservation belongs to a Lodging
    public function lodging(): BelongsTo
    {
        return $this->belongsTo(Lodging::class);
    }

    // A room reservation belongs to a User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
