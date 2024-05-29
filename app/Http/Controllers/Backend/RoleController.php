<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::all(); //spatie role model
        $permissions = Permission::all(); //spatie Permission model
        $permission_groups =User::getPermissionGroups();
        return view('backend.role.index',compact('roles','permissions','permission_groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'=>'required|max:100|unique:roles'
       ],[
           'name.required'=>'Please give a role name'
       ]);

       $roleName=$request->name;
       $role = Role::create(['name' => $roleName]);
       $permissions = $request->input('permissions');
        if(!empty($permissions)){
            $role->syncPermissions($permissions);
        }
       toastr()->success('Role Created Successfully', 'Success');
        return back();
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
        $singleRole=Role::find($id); //spatie role model
        $roles=Role::all(); //spatie role model
        $permissions = Permission::all(); //spatie Permission model
        $permission_groups =User::getPermissionGroups();
        return view('backend.role.edit',compact('roles','permissions','permission_groups','singleRole'));
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
            'name'=>'required|max:100|unique:roles,name,'.$id,
       ],[
           'name.required'=>'Please give a role name'
       ]);

       $roleName=$request->name;
       $role = Role::findById($id);
       $permissions = $request->input('permissions');
        if(!empty($permissions)){
            $role->syncPermissions($permissions);
        }
       toastr()->success('Role Updated Successfully', 'Success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $role = Role::findById($id);
        if(!is_null($role)){
            $role->delete();
        }
       toastr()->success('Role Deleted Successfully', 'Success');
        return back();
    }
}
