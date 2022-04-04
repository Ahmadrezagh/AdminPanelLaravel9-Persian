<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function group()
    {
        return $this->belongsToMany(SettingGroup::class);
    }

    public static function getValue($name)
    {
        return self::where('name',$name)->pluck('value')->first();
    }
}
