<?php

namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\Permission;
use App\Models\RolePermission;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function show()
    {
        $users = Role::get();
        return view('admin.role.show' ,compact('users'));
    }

    public function create()
    {
        $permissions = Permission::get();
        return view('admin.role.create',compact('permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'permissions' => 'required|array|min:1',
            'permissions.*' => 'exists:permissions,id',
        ]);

        // Create a new role
        $role = new Role();
        $role->name = $request->name;
        $role->save();

        foreach ($request->permissions as $permission) {
            $rolePermission = new RolePermission();
            $rolePermission->role_id = $role->id;
            $rolePermission->permission_id = $permission;
            $rolePermission->save();
        }

        return redirect()->route('role.show')->with('success', 'Role created successfully');
    }


        public function edit($id)
        {
            $role = Role::find($id);
            return view('admin.role.edit', compact('role'));
        }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $role = Role::find($id);

        $role->name = $request->name;
        $role->save();
        return redirect()->route('role.show')->with('success', 'Role updated successfully.');
    }

    public function delete($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('role.show')->with('success', 'Role deleted successfully.');
    }

    public function assign()
    {
        $roles = Role::get();
        $permissions = Permission::get();
        return view('admin.role.assign',compact('roles', 'permissions'));
    }

}
