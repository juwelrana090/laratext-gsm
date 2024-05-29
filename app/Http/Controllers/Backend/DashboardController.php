<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\Environment\Console;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function change_password( Request $request){
        $request->validate([
            'password'=>'required|confirmed|min:6',
       ]);

       $user=User::find(Auth::user()->id);
       $user->update([
           'password'=>Hash::make($request->password)
       ]);

       if($user){
         toastr()->success('Password has been Change', 'Success');
       }
        return back();
    }


}
