<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at'];
    public function CarImage(){
        return $this->hasMany(CarImage::class);
    }
    public function ShowRoom(){
        return $this->belongsTo(ShowRoom::class);
    }
    public function CarType(){
        return $this->belongsTo(CarType::class);
    }
    public function FuelType(){
        return $this->belongsTo(FuelType::class);
    }
    public function CarModel(){
        return $this->belongsTo(CarModel::class,'model_id');
    }
     public function Brand(){
        return $this->belongsTo(Brand::class);
    }
     public function MechanicalCondition(){
        return $this->belongsTo(MCondition::class,'m_condition_id');
    }
     public function BodyCondition(){
        return $this->belongsTo(MCondition::class,'b_condition_id');
    }
    public function CarBodyColor(){
        return $this->belongsTo(Color::class,'car_color');
    }
}
