<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Wheel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WheelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wheels =Wheel::all(['id','name']);
        return view('backend.wheels.index',compact('wheels'));
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
            'name'=>'required|max:100|unique:wheels',
       ]);

        $MCondition = Wheel::create([
            'name'=>$request->name,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        if($MCondition){
            toastr()->success('Wheel Specification has been created', 'Success');
        }
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
        $wheel = Wheel::find($id);
        return view('backend.wheels.edit',compact('wheel'));
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
            'name'=>'required|max:100|unique:m_conditions,name,'.$id,
       ]);
       $wheel = Wheel::find($id);
        $wheel->update([
            'name'=>$request->name,
            'updated_at'=>Carbon::now(),
        ]);
        if($wheel){
            toastr()->success('Wheel Specification has been updated', 'Success');
        }
        return redirect()->route('admin.wheels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wheel= Wheel::find($id);
        $Is_Delete=$wheel->delete();
        if($Is_Delete){
            toastr()->success('Wheel Specification Deleted Successfully', 'Success');
        }
        return back();
    }
}
