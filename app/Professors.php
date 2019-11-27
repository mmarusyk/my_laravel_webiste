<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professors extends Model
{
    protected $fillable = [
        'name',
        'position',
        'academic_status',
        'scientific_degree',
        'published',
        'description_short',
        'description',
        'image'
    ];
    public function scopeLastProfessors($query, $count) {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }


}
