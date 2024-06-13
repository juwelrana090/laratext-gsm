<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use App\Models\CarType;
use App\Models\FileManager;
use App\Models\CarSubCategories;

class CarSubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CarSubCategories::all();
        $carTypes = CarType::all();
        return view('backend.carSubCategory.index', compact('categories', 'carTypes'));
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100|unique:car_sub_categories',
            'image' => 'nullable|mimes:png,PNG,JPG,jpg,jpeg,JPEG|max:500',
        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $now_day = date('F_Y');

        $file_location = "";
        $image_id = "";
        if ($request->hasFile('image')) {
            $path = public_path('uploads/files/' . $now_day);

            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->move($path, $fileName);
            $fileModel = new FileManager;
            $file_location = 'uploads/files/' . $now_day . '/' . $fileName;

            $file_type = explode('/', $file->getClientMimeType());

            if ($filePath) {
                $fileModel->file_name = $fileName;
                $fileModel->file_type = $file_type[0];
                $fileModel->file_format = $file->getClientOriginalExtension();
                $fileModel->file_thumbnail = $file_location;
                $fileModel->file_path = $file_location;
                $fileModel->save();
            }

            $image_id = $fileModel->id;
        }


        $name = $request->name;
        $slug = Str::slug($name);

        $business_category = CarSubCategories::where('slug', 'LIKE', "%{$slug}%")->get();
        $count = $business_category->count();

        if ($count > 0) {
            foreach ($business_category as $category) {
                $data[] = $category['slug'];
            }

            if (in_array($slug, $data)) {
                $category_count = 0;
                while (in_array(($slug . '-' . ++$category_count), $data));
                $name = $name . " " . $category_count;
                $slug = $slug . '-' . $category_count;
            }
        }

        $carTypes = CarType::where('id', $request->car_type_id)->first();

        $category_create  = CarSubCategories::create([
            "car_type_id" => $carTypes->id,
            "car_type_name" => $carTypes->name,
            'name' => $name,
            'slug' => $slug,
            'image' => $file_location,
            'description' => $request->description,
            'meta_tags' => $request->meta_tags,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'image_id' => $image_id,
        ]);

        if ($category_create) {
            toastr()->success('Categories has been created', 'Success');
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
        $category = CarSubCategories::where('id', $id)->first();
        $carTypes = CarType::all();
        return view('backend.carSubCategory.edit', compact('category', 'carTypes'));
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100|unique:car_sub_categories,name,' . $id,
            'image' => 'nullable|mimes:png,PNG,JPG,jpg,jpeg,JPEG|max:500',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $category = CarSubCategories::find($request->id);
        $now_day = date('F_Y');

        if (!empty($category->image_id)) {
            $fileManager = FileManager::where('id', '=', $category->image_id)->first();
            $image_id = $category->image_id;
            $file_location = $fileManager->file_path;
        } else {
            $image_id = "";
            $file_location = "=";
        }

        if ($request->hasFile('image')) {

            if (!empty($category->image_id)) {
                $fileManager->delete();
                unlink($fileManager->file_path);
            }

            $path = public_path('uploads/files/' . $now_day);

            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->move($path, $fileName);
            $fileModel = new FileManager;
            $file_location = 'uploads/files/' . $now_day . '/' . $fileName;

            $file_type = explode('/', $file->getClientMimeType());

            if ($filePath) {
                $fileModel->file_name = $fileName;
                $fileModel->file_type = $file_type[0];
                $fileModel->file_format = $file->getClientOriginalExtension();
                $fileModel->file_thumbnail = $file_location;
                $fileModel->file_path = $file_location;
                $fileModel->save();
            }

            $image_id = $fileModel->id;
        }

        $name = $request->name;
        $slug = Str::slug($name);

        $business_category = CarSubCategories::where('slug', 'LIKE', "%{$slug}%")->get();
        $count = $business_category->count();

        if ($count > 0) {
            foreach ($business_category as $category) {
                $data[] = $category['slug'];
            }

            if (in_array($slug, $data)) {
                $category_count = 0;
                while (in_array(($slug . '-' . ++$category_count), $data));
                $name = $name . " " . $category_count;
                $slug = $slug . '-' . $category_count;
            }
        }

        $carTypes = CarType::where('id', $request->car_type_id)->first();

        $category_create  = CarSubCategories::where('id', "=", $request->id)->update([
            "car_type_id" => $carTypes->id,
            "car_type_name" => $carTypes->name,
            'name' => $name,
            'slug' => $slug,
            'image' => $file_location,
            'description' => $request->description,
            'meta_tags' => $request->meta_tags,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'image_id' => $image_id,
        ]);

        if ($category_create) {
            toastr()->success('Categories has been Update', 'Success');
        }

        return redirect()->route('admin.car_sub_category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $color = CarSubCategories::find($id);
        $Is_Delete = $color->delete();
        if ($Is_Delete) {
            toastr()->success('Car Type Deleted Successfully', 'Success');
        }
        return back();
    }
}
