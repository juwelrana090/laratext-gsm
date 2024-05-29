<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertsCategories extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'category_image',
        'category_description',
        'image_id',
    ];
}
