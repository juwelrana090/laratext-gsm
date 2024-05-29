<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ExpertStatus;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expertStatuses =ExpertStatus::all(['id','status']);
        return view('backend.expertStatuses.index',compact('expertStatuses'));
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
            'status'=>'required|max:100|unique:expert_statuses'
       ]);

        $colors = ExpertStatus::create([
            'status'=>$request->status,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        if($colors){
            toastr()->success('Status has been created', 'Success');
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
       $expertStatus = ExpertStatus::find($id);
        return view('backend.expertStatuses.edit',compact('expertStatus'));
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
            'status'=>'required|max:100|unique:expert_statuses,status,'.$id,
       ]);
      $expertStatus = ExpertStatus::find($id);
       $expertStatus->update([
            'status'=>$request->status,
            'updated_at'=>Carbon::now(),
        ]);
        if($expertStatus){
            toastr()->success('Status has been updated', 'Success');
        }
        return redirect()->route('admin.expert_status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = ExpertStatus::find($id);
        $Is_Delete=$status->delete();
        if($Is_Delete){
            toastr()->success('Status Deleted Successfully', 'Success');
        }
        return back();
    }
}
