<?php

namespace App\Http\Controllers\admin;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index()
    { 
        // $roles = Role::all();
        $roles = Role::with('permissions')->get();
        return view('pages.roles.index', compact('roles'));
    }

    public function create()
    { 
        $permissions = Permission::all();
        return view('pages.roles.create', compact('permissions'));
        // return view('pages.roles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles|max:255',
            'description' => 'nullable|max:255',
            'permissions' => 'required|array', 
        ]);
    
        // Create the role
        $role = Role::create($request->only('name', 'description'));
    
        // Attach permissions
        $role->permissions()->attach($request->permissions);

        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }

    public function edit(Role $role)
    {
        $role = Role::with('permissions')->findOrFail($role->id);
        $permissions = Permission::all();
        return view('pages.roles.edit', compact('role', 'permissions'));
        // return view('pages.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,'.$role->id.'|max:255',
            'description' => 'nullable|max:255',
            'permissions' => 'required|array',
        ]);
    
        // Update role
        $role->update($request->only('name', 'description'));
    
        // Sync permissions
        $role->permissions()->sync($request->permissions);

        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }

}
