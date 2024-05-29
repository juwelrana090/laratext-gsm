<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CarType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carTypes = CarType::all();
        return view('backend.carTypes.index', compact('carTypes'));
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
            'name' => 'required|max:100|unique:colors',
            'image' => 'nullable|mimes:png,PNG,JPG,jpg,jpeg,JPEG|max:500',
        ]);

        if ($request->image) {
            $imageName = 'images/cat/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/cat'), $imageName);
        } else {
            $imageName = null;
        }

        $colors = CarType::create([
            'name' => $request->name,
            'description' => $request->cat_dsc,
            'image' => $imageName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        if ($colors) {
            toastr()->success('Type has been created', 'Success');
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
        $carType = CarType::find($id);
        return view('backend.carTypes.edit', compact('carType'));
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
            'name' => 'required|max:100|unique:colors,name,' . $id,
        ]);
        $carType = CarType::find($id);
        if($request->image){
            if (File::exists($carType->image))
            {
                File::delete($carType->image);
            }
            $imageName = 'images/cat/'.time().'.'.$request->image->extension();
            $request->image->move(public_path('images/cat'), $imageName);
        }else{
            $imageName=$carType->image;
        }
        $carType->update([
            'name' => $request->name,
            'description' => $request->cat_dsc,
            'image' => $imageName,
            'updated_at' => Carbon::now(),
        ]);
        if ($carType) {
            toastr()->success('Type has been updated', 'Success');
        }
        return redirect()->route('admin.car_types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $color = CarType::find($id);
        $Is_Delete = $color->delete();
        if ($Is_Delete) {
            toastr()->success('Car Type Deleted Successfully', 'Success');
        }
        return back();
    }
}
