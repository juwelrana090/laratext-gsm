<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ShowRoom;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show_rooms =ShowRoom::all(['id','name','phone','address','owner_name']);
        return view('backend.show_rooms.index',compact('show_rooms'));
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
            'name'=>'required|max:500',
       ]);

        $show_rooms = ShowRoom::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'owner_name'=>$request->owner_name,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        if($show_rooms){
            toastr()->success('ShowRoom has been created', 'Success');
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
        $show_room = ShowRoom::find($id);
        return view('backend.show_rooms.edit',compact('show_room'));
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
            'name'=>'required|max:500',
       ]);
       $ShowRoom = ShowRoom::find($id);
        $ShowRoom->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'owner_name'=>$request->owner_name,
            'updated_at'=>Carbon::now(),
        ]);
        if($ShowRoom){
            toastr()->success('ShowRoom has been updated', 'Success');
        }
        return redirect()->route('admin.show_rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ShowRoom= ShowRoom::find($id);
        $Is_Delete=$ShowRoom->delete();
        if($Is_Delete){
            toastr()->success('ShowRoom Deleted Successfully', 'Success');
        }
        return back();
    }
}
