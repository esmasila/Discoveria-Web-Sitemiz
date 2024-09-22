<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }
    // Kullanıcıları listeleme
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Yeni kullanıcı oluşturma formunu gösterme
    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    // Yeni kullanıcıyı veritabanına kaydetme
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role_id' => 'required',
            'user_status' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $request->role_id,
            'user_status' => $request->user_status,
            'avatar' => $request->avatar,
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    // Belirli bir kullanıcıyı gösterme
    public function show($id)
    {
        $user = User::with('role')->findOrFail($id);
        return view('users.show', compact('user'));
    }

    // Belirli bir kullanıcıyı düzenleme formunu gösterme
    public function edit($id)
    {
        $roles = Role::all();
        $user = User::with('role')->findOrFail($id);
        return view('users.edit', compact('user', 'roles'));
    }

    // Belirli bir kullanıcıyı güncelleme
    public function update(Request $request,$id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role_id' => 'required',
            'user_status' => 'required',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
            'role_id' => $request->role_id,
            'user_status' => $request->user_status,
            'avatar' => $request->avatar,
        ]);



        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }



    // Belirli bir kullanıcıyı silme
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
