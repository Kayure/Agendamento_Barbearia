<?php

namespace App\Facades;

use App\Models\Permission;

class UserPermissions
{
    public static function loadPermissions($user_type)
    {
        $sess = array();

        $perm = Permission::with('resource')->where('type_id', $user_type)->get();

        foreach ($perm as $item) {
            $sess[$item->resource->name] = (bool) $item->permissao;
        }
        session(['user_permissions' => $sess]);
    }
    public static function isAuthorized($resource)
    {
        $permissions = session('user_permissions');
        return $permissions[$resource];
    }
    public static function test()
    {
        return "<h1>UserPermissionsFacade - Running!!</h1>";
    }
}
