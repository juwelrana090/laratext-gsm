<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Contact;
use App\Models\FuelType;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function contactUs()
    {
        return view('contact-us');
    }


    public function businessList()
    {
        return view('business.index');
    }

    public function businessDetails()
    {
        return view('business.details');
    }

    public function expertList()
    {
        return view('expert.index');
    }

    public function expertDetails()
    {
        return view('expert.details');
    }

    public function productList()
    {
        return view('product.index');
    }

    public function productDetails()
    {
        return view('product.details');
    }

    public function brandsList()
    {
        return view('brands.index');
    }

    public function blogList()
    {
        return view('blogs.index');
    }

    public function blogDetails()
    {
        return view('blog.details');
    }

    public function listing()
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
