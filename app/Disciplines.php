<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplines extends Model
{
    protected $fillable = [
        'name',
        'description_short',
        'description',
        'position',
        'academic_status',
        'scientific_degree',
        'image',
        'image_show',
        'published'
    ];
}
