<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'meta_tags',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'image_id',
    ];
}
