<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Hash;
use Illuminate\Auth\Access\Gate;

class UserController extends Controller
{
    public function show()
    {
        // $this->authorize('check-permission', 'user_view');
        $users = User::get();
        return view('admin.user.show', compact('users'));
    }

    public function create(Request $request)
    {
        // $this->authorize('check-permission', 'user_create');
        $roles = Role::get();
        return view('admin.user.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3',
            'role_id' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);

        $create = new User();
        $create->name = $request->name;
        $create->email = $request->email;
        $create->password = Hash::make($request->password);
        $create->role_id = $request->role_id;
        $create->status = $request->status;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('assets/images/users'), $fileName);
            $create->image = $fileName;
        }
        $create->save();
        return redirect()->route('user.show')->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::get();
        return view('admin.user.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'role_id' => 'required',
            // 'image' => 'required',
            'status' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        $user->status = $request->status;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('assets/images/users'), $fileName);
            $user->image = $fileName;
        }
        $user->save();
        return redirect()->route('user.show')->with('success', 'User Updated successfully');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.show')->with('success', 'User deleted successfully');
    }
}
