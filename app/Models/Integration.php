<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Integration extends Model
{
    protected $fillable = [
        'title',          // عنوان عام للقسم (اختياري)
        'image_path_1',   // الصورة الأولى في الدائرة
        'image_path_2',   // الصورة الثانية في الدائرة
        'circle_position', // مثلا _1 أو _2 أو غيره
        'sort_order',     // للترتيب إن أردت
        'is_active',      // تفعيل أو تعطيل
    ];
}
