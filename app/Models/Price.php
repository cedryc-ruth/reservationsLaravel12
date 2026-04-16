<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table('prices', timestamps: false)]
class Price extends Model
{
    protected $fillable = [
        'type',
        'price',
        'description',
        'startDate',
        'endDate',
    ];
}
