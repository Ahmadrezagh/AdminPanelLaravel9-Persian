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
}
