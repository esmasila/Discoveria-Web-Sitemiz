<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }
    // Rollerin listesini gösterir
    public function index()
    {
        $roles = Role::all();
        return view('roller.index', compact('roles'));
    }

    // Yeni rol oluşturma formunu gösterir
    public function create()
    {
        $roles = Role::all(); // Tüm rolleri al
        return view('users.create', compact('roles')); // 'users.create' view'ine rolleri gönder
    }


    // Yeni rolü veritabanına kaydeder
    public function store(Request $request)
    {
        $request->validate([
            'role_name' => 'required|unique:roles',
            'description' => 'nullable',
        ]);

        Role::create([
            'role_name' => $request->role_name,
            'description' => $request->description,
        ]);

        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }


    public function show($id)
    {   $role = Role::findOrFail($id);
        return view('roller.show', compact('role'));
    }


    public function edit($id)
    {   $roles = Role::all();
        $role = Role::findOrFail($id);


        return view('roller.edit', compact('role', 'roles'));
    }

    // Belirli bir rolü günceller
    public function update(Request $request,$id)
    {
        $role = Role::findOrFail($id);
        $request->validate([
            'role_name' => 'required|unique:roles,role_name,' . $role->id,
            'description' => 'nullable',
        ]);

        $role->update([
            'role_name' => $request->role_name,
            'description' => $request->description,
        ]);

        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }

    // Belirli bir rolü siler
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }
}
