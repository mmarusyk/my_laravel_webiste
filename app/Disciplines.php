<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Disciplines extends Model
{
    protected $fillable = [
        'name',
        'course',
        'semester',
        'lecturer',
        'description_short',
        'description',
        'published'
    ];
}
