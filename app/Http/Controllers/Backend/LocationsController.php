<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

use App\Models\Locations;
use App\Models\FileManager;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $locations = Locations::latest()->orderBy('id', 'desc')->paginate(10);

        return view('backend.locations.index', [
            'locations' => $locations
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
            'title' => 'required|max:100|unique:locations',
            'image' => 'nullable|mimes:png,PNG,JPG,jpg,jpeg,JPEG|max:500',
        ]);

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

        $title = $request->title;
        $slug = Str::slug($title);

        $locations = Locations::where('slug', 'LIKE', "%{$slug}%")->get();
        $count = $locations->count();

        if ($count > 0) {
            foreach ($locations as $category) {
                $data[] = $category['slug'];
            }

            if (in_array($slug, $data)) {
                $category_count = 0;
                while (in_array(($slug . '-' . ++$category_count), $data));
                $title = $title . " " . $category_count;
                $slug = $slug . '-' . $category_count;
            }
        }

        $locations_create  = Locations::create([
            'title' => $title,
            'slug' => $slug,
            'image' => $file_location,
            'description' => $request->description,
            'meta_tags' => $request->meta_title,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'image_id' => $image_id,
        ]);

        if ($locations_create) {
            toastr()->success('Locations has been created', 'Success');
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
     * @param  \App\Models\Locations  $locationssLocations
     * @return \Illuminate\Http\Response
     */
    public function show(Locations $locationssLocations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Locations  $locationssLocations
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $locations_info = Locations::find($id);
        $locations = Locations::latest()->orderBy('id', 'desc')->paginate(10);
        return view('backend.locations.edit', [
            "locations_info" => $locations_info,
            "locations" => $locations,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Locations  $locationssLocations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:100|unique:locations,title,' . $id,
            'image' => 'nullable|mimes:png,PNG,JPG,jpg,jpeg,JPEG|max:500',
        ]);

        $category = Locations::find($request->id);
        $fileManager = FileManager::where('id', '=', $category->image_id)->first();

        $now_day = date('F_Y');

        $image_id = $category->image_id;
        $file_location = $fileManager->file_path;


        if ($request->hasFile('image')) {

            $fileManager->delete();
            unlink($fileManager->file_path);

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

        $title = $request->title;
        $slug = Str::slug($title);

        $locations = Locations::where('slug', 'LIKE', "%{$slug}%")->get();
        $count = $locations->count();


        if ($title != $category->title && $slug != $category->slug) {
            if ($count > 0) {
                foreach ($category as $locations) {
                    $data[] = $locations['slug'];
                }

                if (in_array($slug, $data)) {
                    $locations_count = 0;
                    while (in_array(($slug . '-' . ++$locations_count), $data));
                    $title = $title . " " . $locations_count;
                    $slug = $slug . '-' . $locations_count;
                }
            }
        }

        $locations_create  = Locations::where('id', "=", $request->id)->update([
            'title' => $title,
            'slug' => $slug,
            'image' => $file_location,
            'description' => $request->description,
            'meta_tags' => $request->meta_title,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'image_id' => $image_id,
        ]);

        if ($locations_create) {
            toastr()->success('Locations has been Update', 'Success');
        }

        return redirect()->route('locations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Locations  $locationssLocations
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Locations::find($id);
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
