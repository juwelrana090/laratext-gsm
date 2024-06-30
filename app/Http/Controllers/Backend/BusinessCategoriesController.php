<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;


use App\Models\BusinessCategories;
use App\Models\FileManager;

class BusinessCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = BusinessCategories::latest()->orderBy('id', 'desc')->paginate(10);

        return view('backend.business.categories.index', [
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
            'category_name' => 'required|max:100|unique:business_categories',
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


        $category_name = $request->category_name;
        $category_slug = Str::slug($request->category_name);

        $business_category = BusinessCategories::where('category_slug', 'LIKE', "%{$category_slug}%")->get();
        $count = $business_category->count();

        if ($count > 0) {
            foreach ($business_category as $category) {
                $data[] = $category['category_slug'];
            }

            if (in_array($category_slug, $data)) {
                $category_count = 0;
                while (in_array(($category_slug . '-' . ++$category_count), $data));
                $category_name = $category_name . " " . $category_count;
                $category_slug = $category_slug . '-' . $category_count;
            }
        }

        $category_create  = BusinessCategories::create([
            'category_name' => $category_name,
            'category_slug' => $category_slug,
            'category_image' => $file_location,
            'category_description' => $request->category_description,
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
     * @param  \App\Models\BusinessCategories  $BusinessCategories
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessCategories $BusinessCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessCategories  $BusinessCategories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category = BusinessCategories::find($id);
        $categories = BusinessCategories::latest()->orderBy('id', 'desc')->paginate(10);

        return view('backend.business.categories.categories_edit', [
            "category" => $category,
            "categories" => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusinessCategories  $BusinessCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|max:100|unique:business_categories,category_name,' . $id,
            'category_image' => 'nullable|mimes:png,PNG,JPG,jpg,jpeg,JPEG|max:500',
        ]);

        $category = BusinessCategories::find($request->id);
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

        $category_name = $request->category_name;
        $category_slug = Str::slug($request->category_name);

        $business_category = BusinessCategories::where('category_slug', 'LIKE', "%{$category_slug}%")->get();
        $count = $business_category->count();


        if ($category_name != $category->category_name && $category_slug != $category->category_slug) {
            if ($count > 0) {
                foreach ($business_category as $cat) {
                    $data[] = $cat['category_slug'];
                }

                if (in_array($category_slug, $data)) {
                    $cat_count = 0;
                    while (in_array(($category_slug . '-' . ++$cat_count), $data));
                    $category_name = $category_name . " " . $cat_count;
                    $category_slug = $category_slug . '-' . $cat_count;
                }
            }
        }

        $category_create  = BusinessCategories::where('id', "=", $request->id)->update([
            'category_name' => $category_name,
            'category_slug' => $category_slug,
            'category_image' => $file_location,
            'category_description' => $request->category_description,
            'meta_tags' => $request->meta_tags,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'image_id' => $image_id,
        ]);

        if ($category_create) {
            toastr()->success('Categories has been Update', 'Success');

            if ($request->hasFile('category_image')) {
                $fileManager->delete();
                unlink($fileManager->file_path);
            }
        }

        return redirect()->route('business.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessCategories  $BusinessCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = BusinessCategories::find($id);
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
