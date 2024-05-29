<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FuelType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FuelTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fuelTypes = FuelType::all();
        return view('backend.fuelTypes.index', compact('fuelTypes'));
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
            'name' => 'required|max:100|unique:fuel_types',
            'image' => 'nullable|mimes:png,PNG,JPG,jpg,jpeg,JPEG|max:500',
        ]);
        if ($request->image) {
            $imageName = 'images/m_brands/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/m_brands'), $imageName);
        } else {
            $imageName = null;
        }
        if ($request->sImage) {
            $sImageName = 'images/m_brands/second_image/' . time() . '.' . $request->sImage->extension();
            $request->sImage->move(public_path('images/m_brands/second_image'), $sImageName);
        } else {
            $sImageName = null;
        }
        $fuelTypes = FuelType::create([
            'name' => $request->name,
            'brnad_description' => $request->brnad_description,
            'image' => $imageName,
            'second_image' => $sImageName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        if ($fuelTypes) {
            toastr()->success('Brand been created', 'Success');
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
        $fuelType = FuelType::find($id);
        return view('backend.fuelTypes.edit', compact('fuelType'));
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
            'name' => 'required|max:100|unique:fuel_types,name,' . $id,
        ]);
        $fuelType = FuelType::find($id);
        if ($request->image) {
            if (File::exists($fuelType->image)) {
                File::delete($fuelType->image);
            }
            $imageName = 'images/m_brands/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/m_brands'), $imageName);
        } else {
            $imageName = $fuelType->image;
        }
        if ($request->sImage) {
            if (File::exists($fuelType->second_image)) {
                File::delete($fuelType->second_image);
            }
            $sImageName = 'images/m_brands/second_image/' . time() . '.' . $request->sImage->extension();
            $request->sImage->move(public_path('images/m_brands/second_image'), $sImageName);
        } else {
            $sImageName = $fuelType->second_image;
        }
        $fuelType->update([
            'name' => $request->name,
            'brnad_description' => $request->brnad_description,
            'image' => $imageName,
            'second_image'=>$sImageName,
            'updated_at' => Carbon::now(),
        ]);
        if ($fuelType) {
            toastr()->success('Brand been updated', 'Success');
        }
        return redirect()->route('admin.fuel_types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fuelType = FuelType::find($id);
        $Is_Delete = $fuelType->delete();
        if ($Is_Delete) {
            toastr()->success('Brand Deleted Successfully', 'Success');
        }
        return back();
    }
}
