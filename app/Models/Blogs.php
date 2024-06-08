<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'uniqid',
        'post_title',
        'post_slug',
        'post_description',
        'post_categories',
        'post_image',
        'post_status',
        'is_featured',
        'meta_tags',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'meta_canonical_url',
        'view_count',
    ];
}
