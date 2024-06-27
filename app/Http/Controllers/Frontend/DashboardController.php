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

use App\Models\BlogCategories;
use App\Models\BusinessCategories;
use App\Models\ExpertsCategories;
use App\Models\CarType;
use App\Models\FileManager;

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

        $plan_1 = Plans::where('id', 1)->first();
        $plan_2 = Plans::where('id', 2)->first();
        $plan_3 = Plans::where('id', 3)->first();
        $plan_4 = Plans::where('id', 4)->first();

        return view('home', [
            'brand' => $brand,
            'car_type' => $car_type,
            'experts_categories' => $experts_categories,
            'business_categories' => $business_categories,
            'plan_1' => $plan_1,
            'plan_2' => $plan_2,
            'plan_3' => $plan_3,
            'plan_4' => $plan_4
        ]);
    }

    public function aboutUs(Request $request)
    {
        return view('about-us');
    }

    public function contactUs(Request $request)
    {
        return view('contact-us');
    }


    public function businessList(Request $request)
    {
        $businesses = Business::latest()->orderBy('id', 'desc')->paginate(20);
        $featured = Business::where('is_featured', 1)->paginate(20);

        return view('business.index', [
            'businesses' => $businesses,
            'featured' => $featured
        ]);
    }

    public function businessListCategory(Request $request)
    {
        $category = BusinessCategories::where('category_slug', $request->slug)->first();
        $businesses = Business::where('business_category_id', $category->id)->latest()->orderBy('id', 'desc')->paginate(20);
        $featured = Business::where('is_featured', 1)->paginate(20);

        return view('business.index', [
            'businesses' => $businesses,
            'featured' => $featured
        ]);
    }

    public function businessCategory(Request $request)
    {
        $business_categories = BusinessCategories::latest()->orderBy('id', 'desc')->get();
        return view('business.category', [
            'business_categories' => $business_categories,
        ]);
    }

    public function businessDetails(Request $request)
    {
        $businesses = Business::where('company_slug', $request->slug)->first();
        $featured = Business::where('is_featured', 1)->paginate(20);
        return view('business.details', compact('businesses', 'featured'));
    }

    public function expertList(Request $request)
    {
        $experts = Experts::latest()->orderBy('id', 'desc')->paginate(20);
        return view('expert.index', [
            'experts' => $experts
        ]);
    }

    public function expertListCategory(Request $request)
    {
        $category = ExpertsCategories::where('category_slug', $request->slug)->first();
        $experts = Experts::where('experts_categories_id', $category->id)->latest()->orderBy('id', 'desc')->paginate(20);
        return view('expert.index', [
            'experts' => $experts
        ]);
    }


    // experts_categories_id

    public function expertCategory(Request $request)
    {
        $experts_categories = ExpertsCategories::latest()->orderBy('id', 'desc')->get();
        return view('expert.category', [
            'experts_categories' => $experts_categories
        ]);
    }

    public function expertDetails(Request $request)
    {
        $expert = Experts::where('slug', $request->slug)->first();
        return view('expert.details', compact('expert'));
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
                ->paginate(20);
        } else {
            $cars = Car::orderBy('id', 'DESC')->paginate(20);
        }

        return view('product.index', compact('cars'));
    }

    public function productListCategory(Request $request)
    {
        $car_type = CarType::where('id', '=', $request->id)->first();
        $cars = [];
        $name = $request->search;
        if ($name) {
            $cars = Car::where('pub_place', '!=', 'Sold')
                ->where('car_type_id', '=', $car_type->id)
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
                ->paginate(20);
        } else {
            $cars = Car::orderBy('id', 'DESC')->paginate(20);
        }

        return view('product.index', compact('cars'));
    }

    public function productListBrands(Request $request)
    {
        $brand = Brand::where('id', $request->id)->first();
        $cars = [];
        $name = $request->search;
        if ($name) {
            $cars = Car::where('pub_place', '!=', 'Sold')
                ->where('brand_id', '=', $brand->id)
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
                ->paginate(20);
        } else {
            $cars = Car::orderBy('id', 'DESC')->paginate(20);
        }

        return view('product.index', compact('cars'));
    }


    public function productCategory(Request $request)
    {
        $car_type = CarType::latest()->orderBy('id', 'desc')->get();
        return view('product.category.index', [
            'car_type' => $car_type,
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
        return view('brand.index', ['brand' => $brand]);
    }

    public function blogList(Request $request)
    {
        $blogs = Blogs::latest()->orderBy('id', 'desc')->paginate(20);
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

    public function listing(Request $request)
    {
        return view('listing');
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
        if (!MoBileView()) {
            return view('brands', compact('brands', 'v_brands'));
        } else {
            return view('mobile.brands', compact('brands', 'v_brands'));
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
