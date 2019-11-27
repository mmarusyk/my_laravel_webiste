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
    public function scopeLastDisciplines($query, $count) {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
