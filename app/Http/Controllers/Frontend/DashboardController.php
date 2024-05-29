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
        // $NewArrivalsCars = Car::where('pub_place', 'new_arrivals')->orderBy('id', 'DESC')->take(12)->get();
        // $BestSellingCars = Car::where('pub_place', 'best_selling')->orderBy('id', 'DESC')->take(12)->get();
        // $ac_parts = Car::where('pub_place', 'AC Parts')->orderBy('id', 'DESC')->take(12)->get();
        // // $brands =Brand::paginate(6);
        // if (!MoBileView()) {
        //     $brands = Brand::all();
        //     $vehicle_brands = FuelType::all(); //vehicle Brands
        //     return view('welcome', compact('brands', 'vehicle_brands', 'NewArrivalsCars', 'BestSellingCars','ac_parts'));
        // } else {
        //     $brands = Brand::paginate(6);
        //     $vehicle_brands = FuelType::paginate(6); //vehicle Brands
        //     return view('mobile.welcome', compact('vehicle_brands', 'brands', 'NewArrivalsCars', 'BestSellingCars','ac_parts'));
        // }

        return view('home');
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
