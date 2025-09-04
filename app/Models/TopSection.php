<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TopSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_desktop',
        'title_mobile',
        'description',
        'btn_primary_label',
        'btn_primary_link',
        'btn_secondary_label',
        'btn_secondary_link',
        'image_1',
        'image_2',
        'image_3',
    ];
}
