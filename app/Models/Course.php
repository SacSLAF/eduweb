<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($course) {
            $course->slug = Str::slug($course->title);
        });

        static::updating(function ($course) {
            $course->slug = Str::slug($course->title);
        });
    }
}
