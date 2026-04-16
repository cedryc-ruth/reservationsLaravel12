<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table("types", timestamps: false)]
class Type extends Model
{
    protected $fillable = ["type"];
}
