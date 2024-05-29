<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MCondition;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $MConditions =MCondition::all(['id','name']);
        return view('backend.MConditions.index',compact('MConditions'));
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
            'name'=>'required|max:100|unique:m_conditions',
       ]);

        $MConditions = MCondition::create([
            'name'=>$request->name,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        if($MConditions){
            toastr()->success('Mechanical Condition has been created', 'Success');
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
        $MCondition = MCondition::find($id);
        return view('backend.MConditions.edit',compact('MCondition'));
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
       $MCondition = MCondition::find($id);
        $MCondition->update([
            'name'=>$request->name,
            'updated_at'=>Carbon::now(),
        ]);
        if($MCondition){
            toastr()->success('Mechanical Condition has been updated', 'Success');
        }
        return redirect()->route('admin.m_conditions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $MCondition= MCondition::find($id);
        $Is_Delete=$MCondition->delete();
        if($Is_Delete){
            toastr()->success('Mechanical Condition Deleted Successfully', 'Success');
        }
        return back();
    }
}
