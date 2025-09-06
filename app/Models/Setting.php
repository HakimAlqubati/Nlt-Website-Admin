<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 

class Setting extends Model   
{ 
    protected $table = 'settings';
    protected $fillable = ['key', 'value'];
    public $incrementing = false;

    public function getValueAttribute($value)
    {
        if (in_array($this->key, [
            'grn_entry_role_id',
            'grn_approver_role_id',
        ])) {
            return json_decode($value, true) ?? [];
        }

        if (in_array($this->key, [
            'grn_affects_inventory',
            'auto_create_purchase_invoice',
        ])) {
            return filter_var($value, FILTER_VALIDATE_BOOLEAN);
        }

        return $value;
    }

    public function setValueAttribute($value)
    {
        if (in_array($this->key, [
            'grn_entry_role_id',
            'grn_approver_role_id',
        ])) {
            $this->attributes['value'] = json_encode($value);
            return;
        }

        if (is_bool($value)) {
            $this->attributes['value'] = $value ? 'true' : 'false';
            return;
        }

        $this->attributes['value'] = $value;
    }

    public static function getSetting($key, $default = null)
    {
        $setting = static::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    public static function setSetting($key, $value)
    {
        static::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );
    }
}
