<?php

namespace App\Services\Permission\Traits;

use App\Models\User;
use App\Models\Permission;
use Illuminate\Support\Arr;

trait HasPermissions
{
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function givePermissionsTo(... $permissions)
    {
        $permissions = $this->getAllPermissions($permissions);

        if (empty($permissions)) return $this;

        $this->permissions()->syncWithoutDetaching($permissions);

        return $this;
    }

    public function withDrawPermissions(... $permissions)
    {
        $permissions = $this->getAllPermissions($permissions);

        $this->permissions()->detach($permissions);

        return $this;
    }

    public function refreshPermissions(... $permissions)
    {
        $permissions = $this->getAllPermissions($permissions);

        $this->permissions()->sync($permissions);

        return $this;
    }

    public function hasPermission(Permission $permission)
    {

        return $this->hasPermissionsThroughRole($permission) || $this->permissions->contains($permission);
    }

    protected function hasPermissionsThroughRole(Permission $permission)
    {
        foreach ($permission->roles as $role)
        {
            if($this->roles->contains($role)) return true;
        }
        return false;
    }

    function getAllPermissions(array $permissions)
    {
        return Permission::wherein('name' , Arr::flatten($permissions))->get();
    }
}
