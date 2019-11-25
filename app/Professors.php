<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professors extends Model
{
    protected $fillable = [
        'name',
        'description_short',
        'description',
        'course',
        'semester',
        'lecturer',
        'published'
    ];
}
