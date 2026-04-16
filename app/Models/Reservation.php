<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Table('reservations', timestamps: true)]
class Reservation extends Model
{
    protected $fillable = [
        'user_id',
        'status',
    ];

    const CREATED_AT = 'booking_date';

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
