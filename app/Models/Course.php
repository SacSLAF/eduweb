<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'category',
        'title',
        'lessons_count',
        'rating',
        'description',
        'seats',
        'price',
        'start_date',
        'end_date',
        'image',
    ];
    
}
