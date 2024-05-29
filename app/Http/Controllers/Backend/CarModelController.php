<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\CarModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carModels =CarModel::all();
        $brands =Brand::all(['id','name']);
        return view('backend.carModels.index',compact('carModels','brands'));
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
            'brand_id'=>'required',
       ]);

        $model = CarModel::create([
            'name'=>$request->name,
            'brand_id'=>$request->brand_id,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        if($model){
            toastr()->success('Car Model has been added', 'Success');
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
        $carModel = CarModel::find($id);
        $brands = Brand::all();
        return view('backend.carModels.edit',compact('carModel','brands'));
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
       ]);
       $carModel = CarModel::find($id);
        $carModel->update([
            'name'=>$request->name,
            'brand_id'=>$request->brand_id,
            'updated_at'=>Carbon::now(),
        ]);
        if($carModel){
            toastr()->success('Car Model has been updated', 'Success');
        }
        return redirect()->route('admin.car_models.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = carModel::find($id);
        $Is_Delete=$model->delete();
        if($Is_Delete){
            toastr()->success('Car Model Deleted Successfully', 'Success');
        }
        return back();
    }
}
