<?php

namespace App\Http\Controllers\frontend\admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class AdminEmployeeController extends Controller
{
    public function index()
    {
        
        // $users = User::with('roles', 'permissions')->get();
        $users = User::with('roles')->get();
        // dd($users->roles);

        // $users = User::all();
        // dd($users->roles);
        // dd($users);
        // there was many to may relationship 
        // ther was 2 collection user then roles
        // roles was an array of collection so we cant access like dd($users->roles)
        // Solution 
        // we can foreeach here and pass the users in the view file 
        // or we can foreeach roles in the view file
        // here code like
        // $userRoles = [];
        // foreach ($users as $user) {
        //     $roleNames = $user->roles->pluck('name')->implode(', '); // Get role names as a comma-separated string
        //     $userRoles[$user->id] = $roleNames; // Store role names in an array with user ID as key
        // }
        // return view('pages.users.index', compact('users', 'userRoles'));
        // then put this code in the index file
        // <td>{{ $userRoles[$user->id] ?? '' }}</td>

        //i prefer to loop inside index.blade file
        return view('pages.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('pages.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'firstName' => 'required',
            'lastName' => 'required',
            'status' => 'required',
            'role_id' => 'required|exists:roles,id',
        ]);

        // Set a default password
        $request->merge(['password' => bcrypt('password')]); // set default password == password
        // then create a user
        $user = User::create($request->only(['name', 'email', 'firstName', 'lastName', 'password', 'status']));
        // dd($user);
        //assign role
        $user->roles()->attach($request->role_id);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        $user->load('roles');
        return view('pages.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $roles = Role::latest()->get();
        $data = $user->roles()->pluck('roles.id')->toArray();
        // dd($data);
        // @foreach ($roles as $role)
        //     <option value="{{ $role->name }}"
        //         @if(in_array($role->id, $data))
        //         selected 
        //         @endif
        //     >{{ $role->name }}</option>
        // @endforeach
        return view('pages.users.edit', compact('user', 'roles', 'data'));
        // return view('pages.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'firstName' => 'required',
            'lastName' => 'required',
            'status' => 'required',
            'password' => 'nullable|sometimes|min:3|confirmed',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user->update($request->only(['name', 'email', 'firstName', 'lastName', 'status']));
        $user->roles()->sync($request->role_id);

        if($request->has('password')){
            $user->update(['password' => bcrypt('password')]);
        }

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
