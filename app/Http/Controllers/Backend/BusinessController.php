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
        $validator = Validator::make($request->all(), [
            'contact_person_name' => 'required',
            'contact_email' => 'required',
            'contact_mobile' => 'required',
            'contact_whatsapp' => 'required',
            'contact_address' => 'required',
            'contact_image' => 'required',
            'company_name' => 'required',
            'company_mobile' => 'required',
            'company_email' => 'required',
            'business_price' => 'required',
            'business_type' => 'required',
            'business_category_id' => 'required',
            'city' => 'required',
            'country' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

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
        $contact_image = "";
        $contact_image_id = "";

        if ($request->hasFile('contact_image')) {
            $path = public_path('uploads/files/' . $now_day);
            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            $file = $request->file('contact_image');
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

            $contact_image = $file_location;
            $contact_image_id = $fileModel->id;
        }


        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $file) {
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

        $business_hours =  json_encode([
            "sunday_hours" => $request->sunday_hours,
            "monday_hours" => $request->monday_hours,
            "tuesday_hours" => $request->tuesday_hours,
            "wednesday_hours" => $request->wednesday_hours,
            "thursday_hours" => $request->thursday_hours,
            "friday_hours" => $request->friday_hours,
            "saturday_hours" => $request->saturday_hours,
        ]);

        $social_media = json_encode([
            "facebook" => $request->facebook,
            "instagram" => $request->instagram,
            "twitter" => $request->twitter,
            "linkedin" => $request->linkedin,
        ]);


        $business_images = json_encode($business_images);
        $business = Business::create([
            'user_id' => $user_id,
            'uniqid' => $uniqid,
            'contact_person_name' => $request->contact_person_name,
            'contact_email' => $request->contact_email,
            'contact_mobile' => $request->contact_mobile,
            'contact_whatsapp' => $request->contact_whatsapp,
            'contact_google_map' => $request->contact_google_map,
            'contact_address' => $request->contact_address,
            'contact_website' => $request->contact_website,
            'contact_image' => $contact_image,
            'contact_image_id' => $contact_image_id,
            'company_name' => $company_name,
            'company_slug' => $company_slug,
            'company_mobile' => $request->company_mobile,
            'company_description' => $request->company_description,
            'company_email' => $request->company_email,
            'business_price' => $request->business_price,
            'business_type' => $request->business_type,
            'business_hours' => $business_hours,
            'business_images' => $business_images,
            'business_category_id' => $business_category->id,
            'business_category_title' => $business_category->category_name,
            'whatsapp_number' => $request->whatsapp_number,
            'social_media' => $social_media,
            'website' => $request->website,
            'city' => $request->city,
            'country' => $request->country,
            'status' => $request->status,
            'seo_title' => $request->seo_title,
            'seo_keywords' => $request->seo_keywords,
            'seo_description' => $request->seo_description,
            'is_featured' => $request->is_featured,
        ]);

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
    public function edit($id)
    {
        $business = Business::where('id', $id)->first();
        $categories = BusinessCategories::latest()->orderBy('id', 'desc')->get();
        return view('backend.business.business_edit', [
            'business' => $business,
            'categories' => $categories
        ]);
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
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'contact_person_name' => 'required',
            'contact_email' => 'required',
            'contact_mobile' => 'required',
            'contact_whatsapp' => 'required',
            'contact_address' => 'required',
            'contact_image' => 'required',
            'company_name' => 'required',
            'company_mobile' => 'required',
            'company_email' => 'required',
            'business_price' => 'required',
            'business_type' => 'required',
            'business_category_id' => 'required',
            'city' => 'required',
            'country' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $business = Business::find($request->id);

        if (!$business) {
            return redirect()->route('business.index')->with('error', 'Business not found');
        }

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

        $contact_image = "";
        $contact_image_id = "";

        if ($request->hasFile('contact_image')) {
            $path = public_path('uploads/files/' . $now_day);
            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            $file = $request->file('contact_image');
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

            $contact_image = $file_location;
            $contact_image_id = $fileModel->id;
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $file) {
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

        $business_hours =  json_encode([
            "sunday_hours" => $request->sunday_hours,
            "monday_hours" => $request->monday_hours,
            "tuesday_hours" => $request->tuesday_hours,
            "wednesday_hours" => $request->wednesday_hours,
            "thursday_hours" => $request->thursday_hours,
            "friday_hours" => $request->friday_hours,
            "saturday_hours" => $request->saturday_hours,
        ]);


        $social_media = json_encode([
            "facebook" => $request->facebook,
            "instagram" => $request->instagram,
            "twitter" => $request->twitter,
            "linkedin" => $request->linkedin,
        ]);

        $business_images = json_encode($business_images);
        $business = Business::where('id', $request->id)->update([
            'contact_person_name' => $request->contact_person_name,
            'contact_email' => $request->contact_email,
            'contact_mobile' => $request->contact_mobile,
            'contact_whatsapp' => $request->contact_whatsapp,
            'contact_google_map' => $request->contact_google_map,
            'contact_address' => $request->contact_address,
            'contact_website' => $request->contact_website,
            'contact_image' => $contact_image,
            'contact_image_id' => $contact_image_id,
            'company_name' => $company_name,
            'company_slug' => $company_slug,
            'company_mobile' => $request->company_mobile,
            'company_description' => $request->company_description,
            'company_email' => $request->company_email,
            'business_price' => $request->business_price,
            'business_type' => $request->business_type,
            'business_hours' => $business_hours,
            'business_images' => $business_images,
            'business_category_id' => $business_category->id,
            'business_category_title' => $business_category->category_name,
            'whatsapp_number' => $request->whatsapp_number,
            'social_media' => $social_media,
            'website' => $request->website,
            'city' => $request->city,
            'country' => $request->country,
            'status' => $request->status,
            'seo_title' => $request->seo_title,
            'seo_keywords' => $request->seo_keywords,
            'seo_description' => $request->seo_description,
            'is_featured' => $request->is_featured,
        ]);

        return redirect()->route('business.index')->with('success', 'Business created successfully');
    }

    public function statusUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'status' => 'required',
        ]);

        $business = Business::where('id', '=', $request->id)->first();
        $business->update([
            'status' => $request->status
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Business $business)
    {
        $business = Business::where('id', '=', $request->id)->first();

        if ($business) {
            $business->delete();
            return back();
        }
    }
}
