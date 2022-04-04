<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SettingGroup extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function settings()
    {
        return $this->hasMany(Setting::class);
    }

    public static function findByNameOrFail($name)
    {
        $result = self::query()->where('name','=',$name)->first();
        if($result)
        {
            return $result;
        }
        abort(404);
    }
}
