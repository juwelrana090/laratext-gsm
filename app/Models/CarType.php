<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function cars(){
        return $this->hasMany(Car::class,'car_type_id');
    }
}
