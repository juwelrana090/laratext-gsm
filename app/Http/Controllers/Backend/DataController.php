<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarModel;
use App\Models\Contact;
use App\Models\Page;
use App\Models\SocialLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DataController extends Controller
{
    public function GetModelByBrandId($id){
        $models =CarModel::where('brand_id',$id)->with('brand')->get(['id','name','brand_id']);
        return response()->json($models);
    }

    public function assign_showingPlace($car_id,$pub_place){
        $car = Car::find($car_id);
        $car->update([
            'pub_place'=>$pub_place
        ]);
        if($car){
            toastr()->success('Changed Successfully', 'Success');
        }
        return back();
    }


    public function car_image_reset($id){
        $carImage=CarImage::where('car_id',$id)->delete();
        if($carImage){
            toastr()->success('Car Images Reset You Can Upload New Image', 'Success');
        }
        return back();
    }



    public function carImageDelete($car_image_id){

        $carImage=CarImage::find($car_image_id);

        if (File::exists('images/car_image/medium_image/'.$carImage->image))
        {
            File::delete('images/car_image/medium_image/'.$carImage->image);
        }
        if (File::exists('images/car_image/thumbnail/'.$carImage->image))
        {
            File::delete('images/car_image/thumbnail/'.$carImage->image);
        }
        $carImage->delete();
        if($carImage){
            toastr()->success('Car Image Deleted', 'Success');
        }
        return back();
    }

    public function getContactMessage(){
        $contacts = Contact::all();
        return view('backend.contact.contact',compact('contacts'));
    }

    public function frontendSettings(){
        $socialLInk = SocialLink::orderBy('id','DESC')->first();
        return view('backend.frontendSettings.social_whatsApp',compact('socialLInk'));
    }

    public function SocialWhatsAppUpdate(Request $request){
       $socialLInk= SocialLink::find(1)->update($request->all());
        if($socialLInk){
            toastr()->success('Update Social Link', 'Success');
        }
        return redirect()->back();
    }

    public function OfficeLocationUpdate(Request $request,$officeName){
        $data=[
            'tel'=>$request->tel,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
            'address'=>$request->address,
            'map'=>$request->map,
        ];

        if($officeName=='dubai'){
            $socialLInk= SocialLink::find(1)->update([
                'dubai_address'=>json_encode($data)
            ]);
        }
        if($officeName=='sharjah'){
            $socialLInk= SocialLink::find(1)->update([
                'sharjah_address'=>json_encode($data)
            ]);
        }
        if($officeName=='abu_dabi'){
            $socialLInk= SocialLink::find(1)->update([
                'abu_dabi_address'=>json_encode($data)
            ]);
        }

        if($socialLInk){
            toastr()->success('Updated Office Information', 'Success');
        }
        return redirect()->back();
    }

    public function FrontendAboutUs(){
        return view('backend.frontendSettings.about_us');
    }
    public function FrontendAboutUsUpdate(Request $request){
        $page =Page::where('page_name','about-us')->first();
        if($page){
            $page= $page->update([
                'page_name'=>'about-us',
                'page_slug'=>'about-us',
                'page_content'=>$request->general_dsc,
            ]);
            if($page){
                toastr()->success('About Page Updated Successfully', 'Success');
            }
        }else{
           $page= Page::create([
                'page_name'=>'about-us',
                'page_slug'=>'about-us',
                'page_content'=>$request->general_dsc,
            ]);
            if($page){
                toastr()->success('About Page Updated Successfully', 'Success');
            }
        }

        return redirect()->back();
    }
}
