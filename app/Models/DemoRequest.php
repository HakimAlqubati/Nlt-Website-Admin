<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemoRequest extends Model
{
    protected $fillable = [
        'name', 'email', 'company', 'phone', 'message', 'source_page', 'utm_source', 'utm_medium', 'utm_campaign',
    ];
}
