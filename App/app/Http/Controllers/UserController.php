<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required',
            'address' => 'required',
        ]);

        User::create($request->all());

        return redirect()->route('index')
                         ->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        return view('show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {   
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,'.$user,
            'email' => 'required|email|unique:users,email,'.$user,
            'phone' => 'required',
            'address' => 'required',
        ]);

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->route('index')
                         ->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('index')
                         ->with('success', 'User deleted successfully.');
    }
}