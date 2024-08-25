<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
          /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();
        //dd($permissions);
        $permission_groups = User::getPermissionGroup();
        return view('permission.index', compact('permissions', 'permission_groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission_groups = User::getPermissionGroup();
        return view('permission.create', compact('permission_groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'group_name' => 'required'
        ]);

        Permission::create(['name' => $request->name, 'group_name' => $request->group_name]);

        return redirect()->route('permission.index')->with('success', 'Permission Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::where('id', $id)->first();
        dd($permission);
        //dd($permission[0]->group_name);
        return view('permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name' => 'required',
            'group_name' => 'required'
        ]);
        $permission = DB::table('permissions')->find($id);
        dd($permission);

        Permission::update(['name' => $request->name, 'group_name' => $request->group_name]);

        return redirect()->route('permission.index')->with('success', 'Permission Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $id = (int) $id;
        // Find the permission by its id
        $permission = Permission::findById($id);
        //dd($permission);

        // Get all roles
        $roles = Role::all();

        // Loop through all roles
        foreach ($roles as $role) {
            // If the role has the permission, remove it
            if ($role->hasPermissionTo($permission)) {
                $role->revokePermissionTo($permission);
            }
        }

        // Delete the permission
        $permission->delete();

        return redirect()->back()->with('message', 'Permission deleted successfully');
    }
}
