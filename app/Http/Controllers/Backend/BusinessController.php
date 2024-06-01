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

use App\Models\Business;
use App\Models\FileManager;
use App\Models\BusinessCategories;

use Intervention\Image\ImageManagerStatic as Image;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $businesses = Business::latest()->orderBy('id', 'desc')->paginate(20);
        return view('backend.business.business', [
            'businesses' => $businesses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = BusinessCategories::latest()->orderBy('id', 'desc')->get();
        return view('backend.business.business_add', [
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
        $request->validate([
            'contact_person_name' => 'required',
            'contact_email' => 'required',
            'contact_mobile' => 'required',
            'contact_whatsapp' => 'required',
            'contact_address' => 'required',
            'company_name' => 'required',
            'company_slug' => 'required',
            'company_mobile' => 'required',
            'company_email' => 'required',
            'business_type' => 'required',
            'business_hours' => 'required',
            'business_category_id' => 'required',
            'city' => 'required',
            'country' => 'required',
            'status' => 'required',
        ]);


        $uniqid = uniqid();
        $user_id = auth()->user()->id;

        $company_name = $request->company_name;
        $company_slug = Str::slug($company_name);

        $businesses = Business::where('company_slug', 'LIKE', "%{$company_slug}%")->get();
        $count = $businesses->count();

        if ($count > 0) {;
            foreach ($businesses as $business) {
                $data[] = $business['company_slug'];
            }

            if (in_array($company_slug, $data)) {
                $business_count = 0;
                while (in_array(($company_slug . '-' . ++$business_count), $data));
                $company_name = $company_name . " " . $business_count;
                $company_slug = $company_slug . '-' . $business_count;
            }
        }

        $business_category = BusinessCategories::find($request->business_category_id);

        $business_images = [];

        $now_day = date('F_Y');


        if ($request->hasFile('business_images')) {
            foreach ($request->file('business_images') as $key => $file) {
                $path = public_path('uploads/files/' . $now_day);

                if (!File::isDirectory($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }

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

                $business_images[] = [
                    'image_id' => $fileModel->id,
                    'image_path' => $file_location,
                ];
            }
        }

        $data = [
            'user_id' => $user_id,
            'uniqid' => $uniqid,
            'contact_person_name' => $request->contact_person_name,
            'contact_email' => $request->contact_email,
            'contact_mobile' => $request->contact_mobile,
            'contact_whatsapp' => $request->contact_whatsapp,
            'contact_google_map' => $request->contact_google_map,
            'contact_address' => $request->contact_address,
            'contact_website' => $request->contact_website,
            'company_name' => $company_name,
            'company_slug' => $company_slug,
            'company_mobile' => $request->company_mobile,
            'company_description' => $request->company_description,
            'company_email' => $request->company_email,
            'business_type' => $request->business_type,
            'business_hours' => $request->business_hours,
            'business_images' => $business_images,
            'business_category_id' => $business_category->id,
            'business_category_title' => $business_category->category_name,
            'whatsapp_number' => $request->whatsapp_number,
            'social_media' => $request->social_media,
            'website' => $request->website,
            'city' => $request->city,
            'country' => $request->country,
            'status' => $request->status,
            'seo_title' => $request->seo_title,
            'seo_keywords' => $request->seo_keywords,
            'seo_description' => $request->seo_description,
        ];

        $business = Business::create($data);
        return redirect()->route('business.index')->with('success', 'Business created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $business)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $business)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $business)
    {
        //
    }
}
