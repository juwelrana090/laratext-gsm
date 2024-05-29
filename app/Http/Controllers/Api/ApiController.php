<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarImage;
use App\Models\Color;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getBrands(){
        $brands = Brand::all(['id','name','image']);
        return response()->json($brands);
    }

    public function getCarBy_new_arrivals(){
        $cars = Car::where('pub_place','new_arrivals')->with('CarImage')->orderBy('id','DESC')->take(8)->get();
        return response()->json($cars);
    }
     public function getCarBy_best_selling(){
        $cars = Car::where('pub_place','best_selling')->with('CarImage')->orderBy('id','DESC')->take(8)->get();
        return response()->json($cars);
    }

    public function getCarDetails($id){
        $car = Car::where('id',$id)->with('CarImage','MechanicalCondition','BodyCondition','CarBodyColor')->first();
        $result =[
            'price'=>$car->new_price,
            'title'=>$car->title,
            'Brand'=>$car->Brand->name,
            'year'=>$car->year,
            'doors'=>$car->doors,
            'km'=>$car->km,
            'warranty'=>$car->warranty,
            'cylinder'=>$car->cylinder,
            'body_color'=>$car->CarBodyColor->name,
            'mechanical_condition'=>$car->MechanicalCondition->name,
            'body_condition'=>$car->BodyCondition->name,
            'car_type'=>$car->CarType->name,
            'car_images'=>$car->CarImage,
        ];
        return response()->json($result);
    }
}
