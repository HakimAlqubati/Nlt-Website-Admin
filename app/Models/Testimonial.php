<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'author_name',
        'author_email',
        'author_image',
        'content',
        'testimonial_date',
        'group_class',
        'is_active',
    ];

    protected $casts = [
        'testimonial_date' => 'date',
    ];
}
