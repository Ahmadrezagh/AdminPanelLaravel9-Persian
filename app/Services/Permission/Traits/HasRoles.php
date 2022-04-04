<?php

namespace App\Services\Permission\Traits;

use App\Models\Role;
use Illuminate\Support\Arr;

trait HasRoles
{
    public function Roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function giveRolesTo(... $roles)
    {
        $roles = $this->getAllRoles($roles);

        if ($roles->isEmpty()) return $this;

        $this->roles()->syncWithoutDetaching($roles);

        return $this;
    }

    public function withDrawRoles(... $roles)
    {
        $roles = $this->getAllRoles($roles);

        $this->roles()->detach($roles);

        return $this;
    }

    public function refreshRoles(... $roles)
    {
        $roles = $this->getAllRoles($roles);

        $this->roles()->sync($roles);

        return $this;
    }

    public function hasRoles(string $role)
    {
        return $this->roles->contains('name' , $role);
    }


    function getAllRoles(array $role)
    {
        return Role::wherein('name' , Arr::flatten($role))->get();
    }
}
