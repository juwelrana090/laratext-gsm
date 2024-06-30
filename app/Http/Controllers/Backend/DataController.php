<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarModel;
use App\Models\Contact;
use App\Models\Page;
use App\Models\SocialLink;
use App\Models\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DataController extends Controller
{
    public function GetModelByBrandId($id)
    {
        $models = CarModel::where('brand_id', $id)->with('brand')->get(['id', 'name', 'brand_id']);
        return response()->json($models);
    }

    public function assign_showingPlace($car_id, $pub_place)
    {
        $car = Car::find($car_id);
        $car->update([
            'pub_place' => $pub_place
        ]);
        if ($car) {
            toastr()->success('Changed Successfully', 'Success');
        }
        return back();
    }


    public function car_image_reset($id)
    {
        $carImage = CarImage::where('car_id', $id)->delete();
        if ($carImage) {
            toastr()->success('Car Images Reset You Can Upload New Image', 'Success');
        }
        return back();
    }



    public function carImageDelete($car_image_id)
    {

        $carImage = CarImage::find($car_image_id);

        if (File::exists('images/car_image/medium_image/' . $carImage->image)) {
            File::delete('images/car_image/medium_image/' . $carImage->image);
        }
        if (File::exists('images/car_image/thumbnail/' . $carImage->image)) {
            File::delete('images/car_image/thumbnail/' . $carImage->image);
        }
        $carImage->delete();
        if ($carImage) {
            toastr()->success('Car Image Deleted', 'Success');
        }
        return back();
    }

    public function getContactMessage()
    {
        $contacts = Contact::all();
        return view('backend.contact.contact', compact('contacts'));
    }

    public function frontendSettings()
    {
        $socialLInk = SocialLink::orderBy('id', 'DESC')->first();
        return view('backend.frontendSettings.social_whatsApp', compact('socialLInk'));
    }

    public function SocialWhatsAppUpdate(Request $request)
    {
        $socialLInk = SocialLink::find(1)->update($request->all());
        if ($socialLInk) {
            toastr()->success('Update Social Link', 'Success');
        }
        return redirect()->back();
    }

    public function OfficeLocationUpdate(Request $request, $officeName)
    {
        $data = [
            'tel' => $request->tel,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'address' => $request->address,
            'map' => $request->map,
        ];

        if ($officeName == 'dubai') {
            $socialLInk = SocialLink::find(1)->update([
                'dubai_address' => json_encode($data)
            ]);
        }
        if ($officeName == 'sharjah') {
            $socialLInk = SocialLink::find(1)->update([
                'sharjah_address' => json_encode($data)
            ]);
        }
        if ($officeName == 'abu_dabi') {
            $socialLInk = SocialLink::find(1)->update([
                'abu_dabi_address' => json_encode($data)
            ]);
        }

        if ($socialLInk) {
            toastr()->success('Updated Office Information', 'Success');
        }
        return redirect()->back();
    }

    public function FrontendAboutUs()
    {
        return view('backend.frontendSettings.about_us');
    }
    public function FrontendAboutUsUpdate(Request $request)
    {
        $page = Page::where('page_slug', 'about-us')->first();
        $page_images =  [];
        $now_day = date('F_Y');

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

                $page_images[] = [
                    'image_id' => $fileModel->id,
                    'image_path' => $file_location,
                ];
            }
        }

        $page_images = json_encode($page_images);

        if ($page) {
            $page_update = $page->update([
                'page_name' => 'About Us',
                'page_slug' => 'about-us',
                'page_content' => $request->general_dsc,
                'page_images' => $page_images,
                'meta_tags' => $request->meta_tags,
                'meta_title' => $request->meta_title,
                'meta_keywords' => $request->meta_keywords,
                'meta_description' => $request->meta_description,
            ]);
        } else {
            $page_update = Page::create([
                'page_name' => 'About Us',
                'page_slug' => 'about-us',
                'page_content' => $request->general_dsc,
                'page_images' => $page_images,
                'meta_tags' => $request->meta_tags,
                'meta_title' => $request->meta_title,
                'meta_keywords' => $request->meta_keywords,
                'meta_description' => $request->meta_description,
            ]);
        }

        if ($page_update) {
            toastr()->success('About Page Updated Successfully', 'Success');
        }

        return redirect()->back();
    }


    // ImageDelete

    public function imageDelete($id)
    {
        $image = FileManager::find($id);

        if (File::exists($image->file_path)) {
            File::delete($image->file_path);
        }

        $page = Page::where('page_slug', 'about-us')->first();
        $page_images = [];

        $image->delete();
        if ($image) {
            if ($page->page_images) {
                $old_images = json_decode($page->page_images);

                foreach ($old_images  as $image) {
                    if ($image->image_id == $id) {
                    } else {
                        $page_images[] = $image;
                    }
                }

                $page_images = json_encode($page_images);

                $page->update([
                    "page_images" => $page_images
                ]);
            }
            toastr()->success('Car Image Deleted', 'Success');
        }
        return back();
    }
}
