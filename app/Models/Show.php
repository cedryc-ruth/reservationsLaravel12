<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Show extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'poster_url',
        'duration',
        'created_in',
        'location_id',
        'bookable',
    ];
    protected $table = 'shows';
    public $timestamps = false;

    public function location() :BelongsTo {
        return $this->belongsTo(Location::class);
    }
}
