<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    protected $fillable = [
        'activity_id',
        'user_id',
        'reservation_date',
        'reservation_time',
        'nb_adults',
        'nb_children',
        'total_price',
    ];

    // An activity reservation belongs to an activity
    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }

    // An activity reservation belongs to a User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
