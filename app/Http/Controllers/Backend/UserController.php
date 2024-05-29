<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        $roles=Role::all();
        return view('backend.user.index',compact('users','roles'));
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
            'name'=>'required|max:100',
            'email'=>'required|email|unique:users',
            'phone' => 'nullable|numeric',
            'password'=>'required|confirmed|min:6',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

       ]);

       if($request->image){
            $imageName = 'images/users/'.time().'.'.$request->image->extension();
            $request->image->move(public_path('images/users'), $imageName);
        }else{
            $imageName=null;
        }

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'image'=>$imageName,
            'password'=>Hash::make($request->password),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        if($user){
            $user->assignRole($request->roles);
            toastr()->success('User has been Added', 'Success');
        }
        return redirect()->route('dashboard');

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
        $user = User::find($id);
        $users = User::all();
        $roles = Role::all();
        return view('backend.user.edit',compact('user','users','roles'));
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
            'name'=>'required|max:100',
            'email' => 'required|max:100|email|unique:users,email,' . $id,
            'phone' => 'nullable|numeric',
            'password'=>'nullable|confirmed|min:6',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

       ]);
       $user = User::find($id);
       if($request->image){
            if (File::exists($user->image))
            {
                File::delete($user->image);
            }
            $imageName = 'images/users/'.time().'.'.$request->image->extension();
            $request->image->move(public_path('images/users'), $imageName);
        }else{
            $imageName=$user->image;
        }

        if($request->password){
            $password = Hash::make($request->password);
        }else{
            $password= Hash::make($request->password);
        }

         $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'image'=>$imageName,
            'password'=>$password,
            'updated_at'=>Carbon::now(),
        ]);
        $user->roles()->detach();
        if($user){
            $user->assignRole($request->roles);
            toastr()->success('User has been updated', 'Success');
        }
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Is_Delete = User::find($id)->delete();
        if($Is_Delete){
            toastr()->success('User Deleted Successfully', 'Success');
        }
        return back();
    }
}
