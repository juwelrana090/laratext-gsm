<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarImage;
use App\Models\Contact;
use App\Models\FuelType;
use App\Models\Business;
use App\Models\Experts;

use App\Models\Blogs;
use App\Models\Plans;
use App\Models\Review;

use App\Models\Locations;
use App\Models\BlogCategories;
use App\Models\BusinessCategories;
use App\Models\ExpertsCategories;
use App\Models\CarType;
use App\Models\FileManager;
use App\Models\Page;
use App\Models\Banner;
use App\Models\GetInTouch;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $brand = Brand::latest()->orderBy('id', 'desc')->paginate(12);
        $car_type = CarType::latest()->orderBy('id', 'desc')->paginate(12);
        $experts_categories = ExpertsCategories::latest()->orderBy('id', 'desc')->paginate(12);
        $business_categories = BusinessCategories::latest()->orderBy('id', 'desc')->paginate(12);
        $locations = Locations::latest()->orderBy('id', 'desc')->paginate(12);
        $get_locations = Locations::latest()->orderBy('id', 'desc')->get();
        $banner = Banner::latest()->orderBy('id', 'desc')->first();

        $plan_1 = Plans::where('id', 1)->first();
        $plan_2 = Plans::where('id', 2)->first();
        $plan_3 = Plans::where('id', 3)->first();
        $plan_4 = Plans::where('id', 4)->first();

        return view('home', [
            'brand' => $brand,
            'car_type' => $car_type,
            'experts_categories' => $experts_categories,
            'business_categories' => $business_categories,
            'get_locations' => $get_locations,
            'locations' => $locations,
            'banner' => $banner,
            'plan_1' => $plan_1,
            'plan_2' => $plan_2,
            'plan_3' => $plan_3,
            'plan_4' => $plan_4,
        ]);
    }

    public function aboutUs(Request $request)
    {
        $page = Page::where('page_slug', 'about-us')->first();
        return view('about-us', [
            "page" => $page
        ]);
    }

    public function contactUs(Request $request)
    {
        return view('contact-us');
    }


    public function locationsList(Request $request)
    {
        $locations = Locations::latest()->orderBy('id', 'desc')->paginate(24);
        $banner = Banner::latest()->orderBy('id', 'desc')->first();
        return view('locations.index', [
            'locations' => $locations,
            'banner' => $banner
        ]);
    }

    public function locationsListView(Request $request)
    {
        $locations = Locations::latest()->orderBy('id', 'desc')->paginate(24);
        $locations_view = Locations::where('slug', $request->slug)->first();
        $businesses = Business::where('locations_id', $locations_view->id)->orderBy('id', 'desc')->paginate(24);
        $experts = Experts::where('locations_id', $locations_view->id)->orderBy('id', 'desc')->paginate(24);
        $banner = Banner::latest()->orderBy('id', 'desc')->first();

        return view('locations.view', [
            'locations' => $locations,
            'businesses' => $businesses,
            'experts' => $experts,
            'banner' => $banner
        ]);
    }

    public function businessList(Request $request)
    {
        // $businesses = Business::latest()->orderBy('id', 'desc')->paginate(24);
        $businesses = DB::table('businesses')
            ->leftJoin('business_categories', 'businesses.business_category_id', '=', 'business_categories.id')
            ->select([
                'businesses.id',
                'businesses.user_id',
                'businesses.uniqid',
                'businesses.contact_person_name',
                'businesses.contact_position',
                'businesses.contact_email',
                'businesses.contact_mobile',
                'businesses.contact_whatsapp',
                'businesses.contact_google_map',
                'businesses.contact_address',
                'businesses.contact_website',
                'businesses.contact_image',
                'businesses.contact_image_id',
                'businesses.company_name',
                'businesses.company_slug',
                'businesses.company_mobile',
                'businesses.company_description',
                'businesses.company_email',
                'businesses.business_price',
                'businesses.business_type',
                'businesses.business_hours',
                'businesses.business_images',
                'businesses.business_category_id',
                'businesses.business_category_title',
                'businesses.whatsapp_number',
                'businesses.social_media',
                'businesses.website',
                'businesses.city',
                'businesses.locations_id',
                'businesses.country',
                'businesses.status',
                'businesses.seo_title',
                'businesses.seo_keywords',
                'businesses.seo_description',
                'businesses.is_featured',
                'businesses.created_at',
                'business_categories.id as categories_id',
                'business_categories.category_name',
                'business_categories.category_slug',
                'business_categories.category_image',
                'business_categories.category_description',
                'business_categories.meta_tags',
                'business_categories.meta_title',
                'business_categories.meta_keywords',
                'business_categories.meta_description',
            ])
            ->orderBy('businesses.id', 'DESC')
            ->paginate(24);

        $featured = Business::where('is_featured', 1)->paginate(24);

        return view('business.index', [
            'businesses' => $businesses,
            'featured' => $featured
        ]);
    }

    public function businessListCategory(Request $request)
    {
        $category = BusinessCategories::where('category_slug', $request->slug)->first();

        // $businesses = Business::where('business_category_id', $category->id)->latest()->orderBy('id', 'desc')->paginate(24);

        $businesses = DB::table('businesses')
            ->leftJoin('business_categories', 'businesses.business_category_id', '=', 'business_categories.id')
            ->select([
                'businesses.id',
                'businesses.user_id',
                'businesses.uniqid',
                'businesses.contact_person_name',
                'businesses.contact_position',
                'businesses.contact_email',
                'businesses.contact_mobile',
                'businesses.contact_whatsapp',
                'businesses.contact_google_map',
                'businesses.contact_address',
                'businesses.contact_website',
                'businesses.contact_image',
                'businesses.contact_image_id',
                'businesses.company_name',
                'businesses.company_slug',
                'businesses.company_mobile',
                'businesses.company_description',
                'businesses.company_email',
                'businesses.business_price',
                'businesses.business_type',
                'businesses.business_hours',
                'businesses.business_images',
                'businesses.business_category_id',
                'businesses.business_category_title',
                'businesses.whatsapp_number',
                'businesses.social_media',
                'businesses.website',
                'businesses.city',
                'businesses.locations_id',
                'businesses.country',
                'businesses.status',
                'businesses.seo_title',
                'businesses.seo_keywords',
                'businesses.seo_description',
                'businesses.is_featured',
                'businesses.created_at',
                'business_categories.id as categories_id',
                'business_categories.category_name',
                'business_categories.category_slug',
                'business_categories.category_image',
                'business_categories.category_description',
                'business_categories.meta_tags',
                'business_categories.meta_title',
                'business_categories.meta_keywords',
                'business_categories.meta_description',
            ])
            ->where('businesses.business_category_id', $category->id)
            ->orderBy('businesses.id', 'DESC')
            ->paginate(24);

        $featured = Business::where('is_featured', 1)->paginate(24);
        $banner = Banner::latest()->orderBy('id', 'desc')->first();

        return view('business.index', [
            'businesses' => $businesses,
            'featured' => $featured,
            'banner' => $banner
        ]);
    }

    public function businessCategory(Request $request)
    {
        $business_categories = BusinessCategories::latest()->orderBy('id', 'desc')->get();
        $banner = Banner::latest()->orderBy('id', 'desc')->first();

        return view('business.category', [
            'business_categories' => $business_categories,
            'banner' => $banner
        ]);
    }

    public function businessDetails(Request $request)
    {
        // $businesses = Business::where('company_slug', $request->slug)->first();

        $businesses = DB::table('businesses')
            ->leftJoin('business_categories', 'businesses.business_category_id', '=', 'business_categories.id')
            ->select([
                'businesses.id',
                'businesses.user_id',
                'businesses.uniqid',
                'businesses.contact_person_name',
                'businesses.contact_position',
                'businesses.contact_email',
                'businesses.contact_mobile',
                'businesses.contact_whatsapp',
                'businesses.contact_google_map',
                'businesses.contact_address',
                'businesses.contact_website',
                'businesses.contact_image',
                'businesses.contact_image_id',
                'businesses.company_name',
                'businesses.company_slug',
                'businesses.company_mobile',
                'businesses.company_description',
                'businesses.company_email',
                'businesses.business_price',
                'businesses.business_type',
                'businesses.business_hours',
                'businesses.business_images',
                'businesses.business_category_id',
                'businesses.business_category_title',
                'businesses.whatsapp_number',
                'businesses.social_media',
                'businesses.website',
                'businesses.city',
                'businesses.locations_id',
                'businesses.country',
                'businesses.status',
                'businesses.seo_title',
                'businesses.seo_keywords',
                'businesses.seo_description',
                'businesses.is_featured',
                'businesses.created_at',
                'business_categories.id as categories_id',
                'business_categories.category_name',
                'business_categories.category_slug',
                'business_categories.category_image',
                'business_categories.category_description',
                'business_categories.meta_tags',
                'business_categories.meta_title',
                'business_categories.meta_keywords',
                'business_categories.meta_description',
            ])
            ->where('businesses.company_slug', $request->slug)
            ->first();

        $reviews = Review::where('business_id', '=', $businesses->id)->get();

        $similar  = DB::table('businesses')
            ->leftJoin('business_categories', 'businesses.business_category_id', '=', 'business_categories.id')
            ->select([
                'businesses.id',
                'businesses.user_id',
                'businesses.uniqid',
                'businesses.contact_person_name',
                'businesses.contact_position',
                'businesses.contact_email',
                'businesses.contact_mobile',
                'businesses.contact_whatsapp',
                'businesses.contact_google_map',
                'businesses.contact_address',
                'businesses.contact_website',
                'businesses.contact_image',
                'businesses.contact_image_id',
                'businesses.company_name',
                'businesses.company_slug',
                'businesses.company_mobile',
                'businesses.company_description',
                'businesses.company_email',
                'businesses.business_price',
                'businesses.business_type',
                'businesses.business_hours',
                'businesses.business_images',
                'businesses.business_category_id',
                'businesses.business_category_title',
                'businesses.whatsapp_number',
                'businesses.social_media',
                'businesses.website',
                'businesses.city',
                'businesses.locations_id',
                'businesses.country',
                'businesses.status',
                'businesses.seo_title',
                'businesses.seo_keywords',
                'businesses.seo_description',
                'businesses.is_featured',
                'businesses.created_at',
                'business_categories.id as categories_id',
                'business_categories.category_name',
                'business_categories.category_slug',
                'business_categories.category_image',
                'business_categories.category_description',
                'business_categories.meta_tags',
                'business_categories.meta_title',
                'business_categories.meta_keywords',
                'business_categories.meta_description',
            ])
            ->where('businesses.business_category_id', $businesses->categories_id)
            ->orderBy('businesses.id', 'DESC')
            ->paginate(6);

        $featured = Business::where('is_featured', 1)->paginate(24);
        return view('business.details', compact('businesses', 'featured', 'similar', 'reviews'));
    }

    public function expertList(Request $request)
    {
        $experts = Experts::latest()->orderBy('id', 'desc')->paginate(24);
        return view('expert.index', [
            'experts' => $experts
        ]);
    }

    public function expertListCategory(Request $request)
    {
        $category = ExpertsCategories::where('category_slug', $request->slug)->first();
        $experts = Experts::where('experts_categories_id', $category->id)->latest()->orderBy('id', 'desc')->paginate(24);

        $banner = Banner::latest()->orderBy('id', 'desc')->first();

        return view('expert.index', [
            'experts' => $experts,
            'banner' => $banner
        ]);
    }


    // experts_categories_id

    public function expertCategory(Request $request)
    {
        $experts_categories = ExpertsCategories::latest()->orderBy('id', 'desc')->get();
        $banner = Banner::latest()->orderBy('id', 'desc')->first();
        return view('expert.category', [
            'experts_categories' => $experts_categories,
            'banner' => $banner
        ]);
    }

    public function expertDetails(Request $request)
    {
        $expert = Experts::where('slug', $request->slug)->first();
        $reviews = Review::where('expert_id', '=', $expert->id)->get();
        return view('expert.details', compact('expert', 'reviews'));
    }

    public function productList(Request $request)
    {
        $cars = [];
        $name = $request->search;
        if ($name) {
            $cars = Car::where('pub_place', '!=', 'Sold')
                ->where('title', 'LIKE', '%' . $name . '%')
                ->orWhere('vehicle', 'LIKE', '%' . $name . '%')
                ->orWhere('part_no', 'LIKE', '%' . $name . '%')
                ->orWhere('grooves', 'LIKE', '%' . $name . '%')
                ->orWhere('origin', 'LIKE', '%' . $name . '%')
                ->orWhere('manufaturer', 'LIKE', '%' . $name . '%')
                ->orWhere('year', 'LIKE', '%' . $name . '%')
                ->orWhere('cylinder', 'LIKE', '%' . $name . '%')
                ->orWhere('pully_diameter', 'LIKE', '%' . $name . '%')
                ->orWhere('general_dsc', 'LIKE', '%' . $name . '%')
                ->paginate(24);
        } else {
            $cars = Car::orderBy('id', 'DESC')->paginate(24);
        }

        return view('product.index', compact('cars'));
    }

    public function productListCategory(Request $request)
    {
        $car_type = CarType::where('id', '=', $request->id)->first();
        $car_types = CarType::latest()->orderBy('id', 'desc')->get();
        $cars = Car::where('pub_place', '!=', 'Sold')
            ->where('car_type_id', '=', $car_type->id)
            ->orderBy('id', 'DESC')
            ->paginate(24);
        $banner = Banner::latest()->orderBy('id', 'desc')->first();

        return view('product.category.category_view', compact('cars', 'car_type', 'car_types', 'banner'));
    }

    public function productListBrands(Request $request)
    {
        $brand = Brand::where('id', $request->id)->first();
        $cars = Car::where('pub_place', '!=', 'Sold')
            ->where('brand_id', '=', $brand->id)
            ->orderBy('id', 'DESC')
            ->paginate(24);

        $banner = Banner::latest()->orderBy('id', 'desc')->first();

        return view('product.index', compact('cars', 'brand', 'banner'));
    }


    public function productCategory(Request $request)
    {
        $car_type = CarType::latest()->orderBy('id', 'desc')->get();
        $banner = Banner::latest()->orderBy('id', 'desc')->first();
        return view('product.category.index', [
            'car_type' => $car_type,
            'banner' => $banner
        ]);
    }

    public function productDetails(Request $request)
    {
        $car = Car::where('slug', '=', $request->slug)->first();
        $car_images = CarImage::where('car_id', '=', $car->id)->get();
        return view('product.details', compact('car', 'car_images'));
    }

    public function brandsList(Request $request)
    {
        $brand = Brand::latest()->orderBy('id', 'desc')->get();
        $banner = Banner::latest()->orderBy('id', 'desc')->first();
        return view('brand.index', [
            'brand' => $brand,
            'banner' => $banner
        ]);
    }

    public function blogList(Request $request)
    {
        $blogs = Blogs::latest()->orderBy('id', 'desc')->paginate(24);
        $categories = BlogCategories::latest()->orderBy('id', 'desc')->get();

        return view('blogs.index', [
            'blogs' => $blogs,
            'categories' => $categories
        ]);
    }

    public function blogDetails(Request $request)
    {
        $blog = Blogs::where('post_slug', $request->slug)->first();
        $category = Blogs::where('id', $blog->post_category_id)->first();
        $categories = BlogCategories::latest()->orderBy('id', 'desc')->get();
        return view('blogs.details', [
            'blog' => $blog,
            'category' => $category,
            'categories' => $categories
        ]);
    }

    public function addGetInTouch(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'replay_time' => 'required',
            'message' => 'required',
        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $add_touch = GetInTouch::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'replay_time' => $request->replay_time,
            'message' => $request->message,
        ]);


        if ($add_touch) {
            toastr()->success('Get In Touch sent successfully', 'Success');
        }
        return back()->with('success', 'Get In Touch sent successfully');
    }

    public function listing(Request $request)
    {
        $business_categories = BusinessCategories::latest()->orderBy('id', 'desc')->get();
        $categories = ExpertsCategories::latest()->orderBy('id', 'desc')->get();
        $locations = Locations::latest()->orderBy('id', 'desc')->get();
        return view('listing', [
            'business_categories' => $business_categories,
            'categories' => $categories,
            'locations' => $locations,
        ]);
    }
    public function businessCreate(Request $request)
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
            'business_category_id' => 'required',
            'city' => 'required',
            'country' => 'required',
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

        $locations = Locations::where('id', '=', $request->city)->first();

        $business_images = json_encode($business_images);
        $business = Business::create([
            'user_id' => $user_id,
            'uniqid' => $uniqid,
            'contact_person_name' => $request->contact_person_name,
            'contact_position' => $request->contact_position,
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
            'business_price' => 0,
            'business_hours' => $business_hours,
            'business_images' => $business_images,
            'business_category_id' => $business_category->id,
            'business_category_title' => $business_category->category_name,
            'whatsapp_number' => $request->whatsapp_number,
            'social_media' => $social_media,
            'website' => $request->website,
            'city' => $locations->title,
            'locations_id' => $locations->id,
            'country' => $request->country,
            'status' => "pending",
        ]);



        if ($business) {
            toastr()->success('Business created successfully', 'Success');
        }

        return back()->with('success', 'Business created successfully');
    }

    public function expertsCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'contact_person_name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'whatsapp_number' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $uniqid = uniqid();
        $user_id = auth()->user()->id;

        $title = $request->contact_person_name;
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

        $expert_category =  ExpertsCategories::where('id', '=', $request->experts_categories_id)->first();

        $now_day = date('F_Y');

        $expert_image = "";
        $image_id = "";
        $cover_photo = "";
        $cover_photo_id = "";

        $social_profile = json_encode([
            "facebook" => "",
            "instagram" => "",
            "twitter" => "",
            "linkedin" => "",
        ]);

        $working_hours = json_encode([
            "sunday_hours" => "",
            "monday_hours" => "",
            "tuesday_hours" => "",
            "wednesday_hours" => "",
            "thursday_hours" => "",
            "friday_hours" => "",
            "saturday_hours" => "",
        ]);

        $locations = Locations::where('id', '=', $request->city)->first();

        $expert_create = Experts::create([
            'experts_categories_id' => $expert_category->id,
            'experts_categories_name' => $expert_category->category_name,
            'contact_person_name' => $request->contact_person_name,
            'email' => $request->email,
            'address' => $request->address,
            'mobile' => $request->mobile,
            'telephone' => $request->mobile,
            'whatsapp_number' => $request->whatsapp_number,
            'price' => 0,
            'starting_prices' => 0,
            'title' => $title,
            'slug' => $slug,
            'about' => "",
            'services' => "",
            'working_hours' => $working_hours,
            'description' => $request->description,
            'social_profile' => $social_profile,
            'google_map' => $request->google_map,
            'website' => $request->website,
            'city' => $locations->title,
            'locations_id' => $locations->id,
            'country' => $request->country,
            'status' => "pending",
            'seo_title' => "",
            'seo_keywords' => "",
            'seo_description' => "",
            'expert_image' => "",
            'cover_photo' => "",
            'cover_photo_id' => 0,
            'image_id' => 0,
        ]);

        if ($expert_create) {
            toastr()->success('Expert created successfully', 'Success');
        }
        return back()->with('success', 'Expert created successfully');
    }

    public function termsConditions()
    {
        return view('terms-and-conditions');
    }

    public function details($id)
    {
        $car = Car::find($id);
        if (!MoBileView()) {
            return view('detailsCar', compact('car'));
        } else {
            return view('mobile.detailsCar', compact('car'));
        }
    }
    public function brands()
    {
        $brands = Brand::all();
        $v_brands = FuelType::all(); //vehicle brands
        $banner = Banner::latest()->orderBy('id', 'desc')->first();

        if (!MoBileView()) {
            return view('brands', compact('brands', 'v_brands', 'banner'));
        } else {
            return view('mobile.brands', compact('brands', 'v_brands', 'banner'));
        }
    }

    public function brandsDetails($brand_id, $brand_type)
    {

        if ($brand_type == 'm_brands') {
            $brand = Brand::where('id', $brand_id)->first();
        } elseif ($brand_type == 'v_brands') {
            $brand = FuelType::where('id', $brand_id)->first(); //vehicle brands
        } else {
            return 'Something Wrong';
        }
        if (!MoBileView()) {
            return view('brand_details', compact('brand'));
        } else {
            return view('mobile.brand_details', compact('brand'));
        }
    }
    public function service()
    {
        if (!MoBileView()) {
            return view('service');
        } else {
            return view('mobile.service');
        }
    }

    public function contact()
    {
        if (!MoBileView()) {
            return view('contact');
        } else {
            return view('mobile.contact');
        }
    }
    public function abouts()
    {
        if (!MoBileView()) {
            return view('abouts');
        } else {
            return view('mobile.abouts');
        }
    }

    public function mobile_search_page()
    {
        $cars = [];
        return view('mobile.search', compact('cars'));
    }

    public function contact_form(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $contact = Contact::create($request->all());
        if ($contact) {
            toastr()->success('Successfully Send Your Message', 'Success');
        }
        return redirect()->back();
    }
}
