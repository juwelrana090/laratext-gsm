<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\CarType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GlobalController extends Controller
{
    public function categoryBrand($id){
        $category=CarType::where('id',$id)->first();
        if(!MoBileView()){
            $cars = Car::where('car_type_id',$id)->get()->groupBy('fuel_type_id');
             return view('category_brands',compact('cars','category'));
        }else{
            $cars = Car::where('car_type_id',$id)->get()->groupBy('fuel_type_id');
            return view('mobile.category_brands',compact('cars','category'));
        }
    }
    public function carType($category_id,$brand_id){
        if(!MoBileView()){
            $cars = Car::where('car_type_id',$category_id)->where('fuel_type_id',$brand_id)->orderBy('id','DESC')->paginate(10);
             return view('filter',compact('cars'));
        }else{
            $cars = Car::where('car_type_id',$category_id)->where('fuel_type_id',$brand_id)->orderBy('id','DESC')->paginate(20);
            return view('mobile.filter',compact('cars'));
        }
    }

    public function carAll(){
        $cars = Car::orderBy('id','DESC')->paginate(10);
        if(!MoBileView()){
            return view('filter',compact('cars'));
        }else{
            $cars = Car::orderBy('id','DESC')->paginate(14);
            return view('mobile.filter',compact('cars'));
        }
    }

    public function getCarByBrand($id){
        $cars = Car::where('brand_id',$id)->orderBy('id','DESC')->paginate(10);
        if(!MoBileView()){
             return view('filter',compact('cars'));
        }else{
            $cars = Car::where('brand_id',$id)->orderBy('id','DESC')->paginate(20);
            return view('mobile.filter',compact('cars'));
        }
    }
    public function vehicle_brand($id){
        $cars = Car::where('fuel_type_id',$id)->orderBy('id','DESC')->paginate(10);
        if(!MoBileView()){
             return view('filter',compact('cars'));
        }else{
            $cars = Car::where('fuel_type_id',$id)->orderBy('id','DESC')->paginate(20);
            return view('mobile.filter',compact('cars'));
        }
    }

    public function newArrivals(){
        if(MoBileView()){
            $cars = Car::where('pub_place','new_arrivals')->orderBy('id','DESC')->paginate(20);
            return view('mobile.filter',compact('cars'));
        }
    }
    public function bestSelling(){
        if(MoBileView()){
            $cars = Car::where('pub_place','best_selling')->orderBy('id','DESC')->paginate(20);
            return view('mobile.filter',compact('cars'));
        }
    }

    public function searchGetFilter(Request $request){
        $cars = Car::query();
        if($request->brand){
            if($request->brand=='all'){
                $cars = $cars;
            }else{
                $cars = $cars->where('brand_id',$request->brand);
            }
        }
        if($request->model){
            if($request->model!=='all'){
                $cars = $cars->where('model_id',$request->model);
            }else{
                $cars = $cars->where('brand_id',$request->brand);
            }

        }
        if($request->price_start || $request->price_end ){
           $cars = $cars->whereBetween('new_price',[$request->price_start,$request->price_end]);
        }
        if($request->year_start || $request->year_end ){
           $cars = $cars->whereBetween('year',[$request->year_start,$request->year_end]);
        }
        if($request->km_start|| $request->km_end ){
           $cars = $cars->whereBetween('km',[$request->km_start,$request->km_end]);
        }
        $cars = $cars->orderBy('id','DESC')->paginate(120);
        if(!MoBileView()){
            return view('filter',compact('cars'));
        }else{
            return view('mobile.filter',compact('cars'));
        }
    }

    public function getBrandModel($id){
        $models = CarModel::where('brand_id',$id)->get();
        return response()->json($models);
    }

    public function filter(){
        return view('mobile.search_filter');
    }

    public function searchAuto(Request $request){
        // $car =  Car::where('title','LIKE','%'.$name.'%')->orderBy('id','DESC')->get();
        // dd($request->all());
        $name = $request->search;
        $cars=[];
        if($name){
            // $cars = DB::table('cars')
            // ->join('brands', 'cars.brand_id', '=', 'brands.id')
            // ->join('fuel_types', 'cars.fuel_type_id', '=', 'fuel_types.id')
            // ->join('car_types', 'cars.car_type_id', '=', 'car_types.id')
            // ->select('cars.*')
            // ->orWhere('cars.vehicle','LIKE','%'.$name.'%')
            // ->orWhere('brands.name','LIKE','%'.$name.'%')
            // ->orWhere('fuel_types.name','LIKE','%'.$name.'%')
            // ->orWhere('car_types.name','LIKE','%'.$name.'%')
            $cars = Car::
            where('pub_place','!=','Sold')
            ->where('title','LIKE','%'.$name.'%')
            ->orWhere('vehicle','LIKE','%'.$name.'%')
            ->orWhere('part_no','LIKE','%'.$name.'%')
            ->orWhere('grooves','LIKE','%'.$name.'%')
            ->orWhere('origin','LIKE','%'.$name.'%')
            ->orWhere('manufaturer','LIKE','%'.$name.'%')
            ->orWhere('year','LIKE','%'.$name.'%')
            ->orWhere('cylinder','LIKE','%'.$name.'%')
            ->orWhere('pully_diameter','LIKE','%'.$name.'%')
            ->orWhere('general_dsc','LIKE','%'.$name.'%')
            ->get();
        }

        if(!MoBileView()){
            return view('search',compact('cars'));
        }else{
            return view('mobile.search',compact('cars'));
        }

        // return response()->json($car);
    }
}
