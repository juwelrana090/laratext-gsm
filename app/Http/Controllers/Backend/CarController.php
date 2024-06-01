<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\Color;
use App\Models\ExpertStatus;
use App\Models\FuelType;
use App\Models\MCondition;
use App\Models\ShowRoom;
use App\Models\Wheel;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
// use Image;

use Intervention\Image\ImageManagerStatic as Image;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cars=[];
        $name = $request->search;
        if($name){
            $cars= Car::
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
        }else{
            $cars = Car::orderBy('id','DESC')->get();
        }

        return view('backend.car.list',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=Brand::all(['id','name']);
        $colors=Color::all(['id','name']);
        $statuses=ExpertStatus::all(['id','status']);
        $wheels=Wheel::all(['id','name']);
        $showRooms=ShowRoom::all(['id','name']);
        $car_types=CarType::all(['id','name']);
        $m_conditions=MCondition::all(['id','name']);
        $fuels=FuelType::all(['id','name']);
        return view('backend.car.index',compact('statuses','colors','brands','car_types','m_conditions','fuels','showRooms','wheels'));
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
            'title'=>'required',
        ]);

        $data =[
            'title'=>$request->title,
            'brand_id'=>$request->brand_id,
            'year'=>$request->car_year,
            'slug'=>$request->slug,


            'car_type_id'=>$request->car_type_id,
            'fuel_type_id'=>$request->vehicle_brands,

            'cylinder'=>$request->cylinder,
            'part_no'=>$request->part_no,
            'vehicle'=>$request->vehicle,
            'grooves'=>$request->grooves,
            'voltage'=>$request->voltage,
            'sensor'=>$request->sensor,
            'pully_diameter'=>$request->pully_diameter,
            'origin'=>$request->origin,
            'manufaturer'=>$request->manufaturer,
            'general_dsc'=>$request->general_dsc,
            'pub_place'=>$request->pub_place,

            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'category_title' => $request->category_title,
            'sub_category_id' => $request->sub_category_id,
            'sub_category_title' => $request->sub_category_title,
            'type' => $request->type,
            'condition' => $request->condition,
            'application' => $request->application,
            'uses' => $request->uses,
            'product_note' => $request->product_note,
            'delivery_note' => $request->delivery_note,
            'brand' => $request->brand,
            'made' => $request->made,
            'payment_options' => $request->payment_options,
            'seo_title' => $request->seo_title,
            'seo_keywords' => $request->seo_keywords,
            'seo_description' => $request->seo_description,

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ];
        $result=Car::create($data);
        if ($request->hasFile('images')){
            $productId= $result->id;
            foreach ($request->file('images') as $key=>$file){
                $ext=$file->getClientOriginalName();
                $t=time();
                $filename=($key+1).'-'.$t.'-'.Str::slug($request->title).uniqid().'.'.'webp';

                $thumbnailPath = public_path('/images/car_image/thumbnail');
                $mediumPath = public_path('/images/car_image/medium_image');

                // image compress
                $img = Image::make($file->getRealPath());
                $medium_img = Image::make($file->getRealPath());

                // thumbnail image resize
                $img->resize(250, 150, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnailPath.'/'.$filename);
                // medium image resize
                $medium_img->encode('webp', 50)->save($mediumPath.'/'.$filename);
                CarImage::create([
                    'car_id'=>$productId,
                    'image'=>$filename,
                ]);
            }
        }

        if($result){
            toastr()->success('Product has been added', 'Success');
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands=Brand::all(['id','name']);
        $colors=Color::all(['id','name']);
        $statuses=ExpertStatus::all(['id','status']);
        $wheels=Wheel::all(['id','name']);
        $showRooms=ShowRoom::all(['id','name']);
        $car_types=CarType::all(['id','name']);
        $m_conditions=MCondition::all(['id','name']);
        $fuels=FuelType::all(['id','name']);
        $car = Car::find($id);
        return view('backend.car.edit',compact('statuses','colors','brands','car_types','m_conditions','fuels','showRooms','wheels','car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
       ]);

        $data =[
            'title'=>$request->title,
            'brand_id'=>$request->brand_id,
            'year'=>$request->car_year,
            'slug'=>$request->slug,


            'car_type_id'=>$request->car_type_id,
            'fuel_type_id'=>$request->vehicle_brands,

            'cylinder'=>$request->cylinder,
            'part_no'=>$request->part_no,
            'vehicle'=>$request->vehicle,
            'grooves'=>$request->grooves,
            'voltage'=>$request->voltage,
            'sensor'=>$request->sensor,
            'pully_diameter'=>$request->pully_diameter,
            'origin'=>$request->origin,
            'manufaturer'=>$request->manufaturer,
            'general_dsc'=>$request->general_dsc,
            'pub_place'=>$request->pub_place,

            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'category_title' => $request->category_title,
            'sub_category_id' => $request->sub_category_id,
            'sub_category_title' => $request->sub_category_title,
            'type' => $request->type,
            'condition' => $request->condition,
            'application' => $request->application,
            'uses' => $request->uses,
            'product_note' => $request->product_note,
            'delivery_note' => $request->delivery_note,
            'brand' => $request->brand,
            'made' => $request->made,
            'payment_options' => $request->payment_options,
            'seo_title' => $request->seo_title,
            'seo_keywords' => $request->seo_keywords,
            'seo_description' => $request->seo_description,

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ];
        $result=Car::find($id)->update($data);
        if ($request->hasFile('images')){
            foreach ($request->file('images') as $key=>$file){
                $ext=$file->getClientOriginalName();
                $t=time();
                $filename=($key+1).'-'.$t.'-'.Str::slug($request->title).uniqid().'.'.'webp';

                $thumbnailPath = public_path('/images/car_image/thumbnail');
                $mediumPath = public_path('/images/car_image/medium_image');

                // image compress
                $img = Image::make($file->getRealPath());
                $medium_img = Image::make($file->getRealPath());

                // thumbnail image resize
                $img->encode('webp', 50)->resize(250, 150, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnailPath.'/'.$filename);
                // medium image resize
                $medium_img->encode('webp', 10)->save($mediumPath.'/'.$filename,15);

                CarImage::create([
                    'car_id'=>$id,
                    'image'=>$filename,
                ]);
            }
        }

        if($result){
            toastr()->success('Product Information Updated', 'Success');
        }
        return redirect()->route('admin.cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $carImage = CarImage::where('car_id',$id)->get();
        foreach($carImage as $image){
            if (File::exists('images/car_image/medium_image/'.$image->image))
            {
                File::delete('images/car_image/medium_image/'.$image->image);
            }
             if (File::exists('images/car_image/thumbnail/'.$image->image))
            {
                File::delete('images/car_image/thumbnail/'.$image->image);
            }
        }
        $car->delete();
        if($car){
            toastr()->success('Car Deleted', 'Success');
        }
        return back();
    }
}
