<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChooseItem extends Model
{
    protected $fillable = [
        'sort_order','row','section_number','title','description',
        'icon_path','icon_alt','is_active',
    ];
}
