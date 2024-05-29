<?php

use App\Models\Brand;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Page;
use App\Models\SocialLink;
use Jenssegers\Agent\Agent;

function search_in_array($value,$arr){
    if($arr!=Null){
        $result = in_array($value,$arr,true);
        if (!empty($result)) {
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function CarTypes(){
    $menu =CarType::all(['id','name']);
    return $menu;
}

function brands(){
    $brands =Brand::all(['id','name']);
    return $brands;
}

function MoBileView(){
    $agent = new Agent();
    $mobileView =$agent->isMobile();
    return $mobileView;
}
function mediumImage($name){
    $mediumPath= asset('/images/car_image/medium_image/'.$name);
    return $mediumPath;
}
function thumbnail($name){
    $thumbnailPath = asset('/images/car_image/thumbnail/'.$name);
    return $thumbnailPath;
}

function title_slug($string)
{
    $slug = preg_replace('/[-\s]+/', '-', strtolower(trim($string)));
    return $slug;
}

function social_link(){
    return SocialLink::orderBy('id','DESC')->first();
}
function dubai_address(){
    $dubai=  SocialLink::orderBy('id','DESC')->first();
    return json_decode($dubai->dubai_address);
}
function dubai_ras_al_khor_address(){
    $dubai=  SocialLink::orderBy('id','DESC')->first();
    return json_decode($dubai->dubai_ras_al_khor_address);
}
function sharjah_address(){
    $dubai=  SocialLink::orderBy('id','DESC')->first();
    return json_decode($dubai->sharjah_address);
}
function abu_dabi_address(){
    $dubai=  SocialLink::orderBy('id','DESC')->first();
    return json_decode($dubai->abu_dabi_address);
}
function pages(){
    $pages=  Page::orderBy('id','DESC')->first();
    return $pages;
}

function getBrandName($id){
    $vehicleBrand =  FuelType::where('id',$id)->first();
    return $vehicleBrand;
}


