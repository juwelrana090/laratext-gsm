<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;


use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

use App\Models\Experts;
use App\Models\FileManager;
use App\Models\ExpertsCategories;


class ExpertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $experts = Experts::latest()->orderBy('id', 'desc')->paginate(20);
        return view('backend.experts.experts', [
            'experts' => $experts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = ExpertsCategories::latest()->orderBy('id', 'desc')->get();
        return view('backend.experts.experts_add', [
            'categories' => $categories
        ]);
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
            'contact_person_name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'whatsapp_number' => 'required',
            'price' => 'required',
            'title' => 'required',
            'city' => 'required',
            'country' => 'required',
            'about' => 'required',
            'working_hours' => 'required',
            'services' => 'required',
            'starting_prices' => 'required',
            'expert_image' => 'required|mimes:png,PNG,JPG,jpg,jpeg,JPEG|max:2048',
        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $uniqid = uniqid();
        $user_id = auth()->user()->id;

        $title = $request->title;
        $slug = Str::slug($title);

        $experts = Experts::where('slug', 'LIKE', "%{$slug}%")->get();
        $count = $experts->count();

        if ($count > 0) {
            $data = [];
            foreach ($experts as $expert) {
                $data[] = $expert['slug'];
            }

            if (in_array($slug, $data)) {
                $expert_count = 0;
                while (in_array(($slug . '-' . ++$expert_count), $data));
                $title = $title . " " . $expert_count;
                $slug = $slug . '-' . $expert_count;
            }
        }

        $expert_category = ExpertsCategories::find($request->experts_categories_id);

        $now_day = date('F_Y');

        $file_location = "";
        $image_id = "";

        if ($request->hasFile('expert_image')) {
            $path = public_path('uploads/files/' . $now_day);

            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            $file = $request->file('expert_image');
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

        $expert_create = Experts::create([
            'experts_categories_id' => $expert_category->id,
            'experts_categories_name' => $expert_category->category_name,
            'contact_person_name' => $request->contact_person_name,
            'email' => $request->email,
            'address' => $request->address,
            'mobile' => $request->mobile,
            'telephone' => $request->telephone,
            'whatsapp_number' => $request->whatsapp_number,
            'price' => $request->price,
            'title' => $title,
            'slug' => $slug,
            'about' => $request->about,
            'working_hours' => $request->working_hours,
            'description' => $request->description,
            'services' => $request->services,
            'starting_prices' => $request->starting_prices,
            'social_profile' => $request->social_profile,
            'google_map' => $request->google_map,
            'ratings' => $request->ratings,
            'reviews' => $request->reviews,
            'website' => $request->website,
            'city' => $request->city,
            'country' => $request->country,
            'seo_title' => $request->seo_title,
            'seo_keywords' => $request->seo_keywords,
            'seo_description' => $request->seo_description,
            'expert_image' => $file_location,
            'image_id' => $image_id,
        ]);
        return redirect()->route('experts.index')->with('success', 'Expert created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experts  $experts
     * @return \Illuminate\Http\Response
     */
    public function show(Experts $experts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experts  $experts
     * @return \Illuminate\Http\Response
     */
    public function edit(Experts $experts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experts  $experts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experts $experts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experts  $experts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experts $experts)
    {
        //
    }
}
