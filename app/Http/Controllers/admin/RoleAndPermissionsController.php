<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleAndPermissionsController extends Controller
{
    public function indexRoles()
    {
        $this->authorize('view', Role::class);
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all();
        return view(
            'admin.roles',
            [
                'roles' => $roles,
                'permissions' => $permissions
            ]
        );
    }

    public function updaterole(Request $request)
    {
        try {
            $this->authorize('update', Role::class);
            $role = Role::where('id', $request->id_role)->first();
            $role->update([
                'nom' => $request->nom_role,
                'description' => $request->desc_role,
            ]);
            $role->permissions()->sync($request->roles_per);
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

    }

    // delete role
    public function deleterole(Request $request)
    {   
        try {
            $this->authorize('delete', Role::class);
            $role = Role::where('id', $request->id_role)->first();
            $role->delete();
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    // update permissions

    public function updatepermission(Request $request)
    {
        try {
            $permission = Permission::where('id', $request->id_permission)->first();
            $permission->update([
                'nom' => $request->nom_permission,
                'description' => $request->desc_permission,
            ]);
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    // delete permission
    public function deletepermission(Request $request)
    {
        try {
            $permission = Permission::where('id', $request->id_permission)->first();
            $permission->delete();
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
