<?php

namespace App\Models;

use App\Services\Permission\Traits\HasPermissions;
use App\Services\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory,HasRoles, HasPermissions;
    use SoftDeletes;
    protected $fillable=['name'];

    public function user()
    {
        return $this->belongsToMany( User::class );
    }
}
