<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    protected $fillable = ['slug','designation', 'address', 'locality_postal_code','website','phone'];
    protected $table = 'locations';
    public $timestamps = false;

    public function locality() :BelongsTo {
        return $this->belongsTo(Locality::class);
    }

    public function shows() : HasMany {
        return $this->hasMany(Show::class);
    }
}
