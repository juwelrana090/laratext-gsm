<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarSubCategories extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_type_id',
        'car_type_name',
        'name',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_tags',
        'meta_keywords',
        'meta_description',
        'meta_canonical_url',
        'image_id',
    ];
}
