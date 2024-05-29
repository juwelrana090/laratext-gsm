<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands =Brand::all();
        return view('backend.brands.index',compact('brands'));
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
            'name'=>'required|max:100|unique:brands',
            'image' => 'nullable|mimes:png,PNG,JPG,jpg,jpeg,JPEG|max:500',
       ]);

       if($request->image){
            $imageName = 'images/brands/'.time().'.'.$request->image->extension();
            $request->image->move(public_path('images/brands'), $imageName);
        }else{
            $imageName=null;
        }



        $brand = Brand::create([
            'name'=>$request->name,
            'brnad_description'=>$request->brnad_description,
            'image'=>$imageName,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        if($brand){
            toastr()->success('Brand has been created', 'Success');
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
        $brand = Brand::find($id);
        return view('backend.brands.edit',compact('brand'));
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
            'name'=>'required|max:100|unique:brands,name,'.$id,
            'image' => 'nullable|mimes:png,PNG,JPG,jpg,jpeg,JPEG|max:500',
       ]);
       $brand = Brand::find($id);
       if($request->image){
            if (File::exists($brand->image))
            {
                File::delete($brand->image);
            }
            $imageName = 'images/brands/'.time().'.'.$request->image->extension();
            $request->image->move(public_path('images/brands'), $imageName);
        }else{
            $imageName=$brand->image;
        }

        $brand->update([
            'name'=>$request->name,
            'brnad_description'=>$request->brnad_description,
            'image'=>$imageName,
            'updated_at'=>Carbon::now(),
        ]);
        if($brand){
            toastr()->success('Brand has been updated', 'Success');
        }
        return redirect()->route('admin.brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        if (File::exists($brand->image))
        {
            File::delete($brand->image);
        }
        $Is_Delete=$brand->delete();
        if($Is_Delete){
            toastr()->success('Brand Deleted Successfully', 'Success');
        }
        return back();
    }
}
