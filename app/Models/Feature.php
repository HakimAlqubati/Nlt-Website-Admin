<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = [
        'sort_order','section_number','title','description',
        'image_path','image_alt','is_active',
    ];
}
