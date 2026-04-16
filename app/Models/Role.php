<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table('roles', timestamps: false)]
class Role extends Model
{
    protected $fillable = ['role'];
}
