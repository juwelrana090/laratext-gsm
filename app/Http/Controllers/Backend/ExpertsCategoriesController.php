<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

use App\Models\ExpertsCategories;
use App\Models\FileManager;

class ExpertsCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = ExpertsCategories::latest()->orderBy('id', 'desc')->paginate(10);

        return view('backend.experts.categories.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $request->validate([
            'category_name' => 'required|max:100|unique:experts_categories',
            'category_image' => 'nullable|mimes:png,PNG,JPG,jpg,jpeg,JPEG|max:500',
        ]);

        $now_day = date('F_Y');

        $file_location = "";
        $image_id = "";
        if ($request->hasFile('category_image')) {
            $path = public_path('uploads/files/' . $now_day);

            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            $file = $request->file('category_image');
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

        $category_create  = ExpertsCategories::create([
            'category_name' => $request->category_name,
            'category_image' => $file_location,
            'category_description' => $request->category_description,
            'image_id' => $image_id,
        ]);

        if ($category_create) {
            toastr()->success('Categories has been created', 'Success');
        }

        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpertsCategories  $expertsCategories
     * @return \Illuminate\Http\Response
     */
    public function show(ExpertsCategories $expertsCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpertsCategories  $expertsCategories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = ExpertsCategories::find($id);
        $categories = ExpertsCategories::latest()->orderBy('id', 'desc')->paginate(10);
        return view('backend.experts.categories.categories_edit', [
            "category" => $category,
            "categories" => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExpertsCategories  $expertsCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|max:100|unique:experts_categories,category_name,' . $id,
            'category_image' => 'nullable|mimes:png,PNG,JPG,jpg,jpeg,JPEG|max:500',
        ]);

        $category = ExpertsCategories::find($request->id);
        $fileManager = FileManager::where('id', '=', $category->image_id)->first();

        $now_day = date('F_Y');

        $image_id = $category->image_id;
        $file_location = $fileManager->file_path;


        if ($request->hasFile('category_image')) {

            $fileManager->delete();
            unlink($fileManager->file_path);

            $path = public_path('uploads/files/' . $now_day);

            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            $file = $request->file('category_image');
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

        $category_create  = ExpertsCategories::where('id', "=", $request->id)->update([
            'category_name' => $request->category_name,
            'category_image' => $file_location,
            'category_description' => $request->category_description,
            'image_id' => $image_id,
        ]);

        if ($category_create) {
            toastr()->success('Categories has been Update', 'Success');
        }

        return redirect()->route('business.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpertsCategories  $expertsCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = ExpertsCategories::find($id);
        $Is_Delete = $category->delete();
        if ($Is_Delete) {
            $fileManager = FileManager::where('id', '=', $category->image_id)->first();
            $fileManager->delete();
            unlink($fileManager->file_path);

            toastr()->success('Category Deleted Successfully', 'Success');
        }
        return back();
    }
}
