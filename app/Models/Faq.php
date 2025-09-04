<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = [
        'sort_order','section_number','question','answer','is_active',
    ];
}
