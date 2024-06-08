<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategories extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_title',
        'category_slug',
        'category_image',
        'meta_tags',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
}
