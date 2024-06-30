<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // protected $guarded = ['id','created_at'];
    use HasFactory;
    protected $fillable = [
        'page_name',
        'page_slug',
        'page_content',
        'page_images',
        'meta_tags',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
}
