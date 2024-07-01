<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experts extends Model
{
    use HasFactory;
    protected $fillable = [
        'experts_categories_id',
        'contact_person_name',
        'email',
        'address',
        'mobile',
        'telephone',
        'whatsapp_number',
        'price',
        'title',
        'slug',
        'about',
        'working_hours',
        'description',
        'services',
        'starting_prices',
        'social_profile',
        'google_map',
        'ratings',
        'reviews',
        'website',
        'city',
        'locations_id',
        'country',
        'status',
        'seo_title',
        'seo_keywords',
        'seo_description',
        'expert_image',
        'cover_photo',
        'cover_photo_id',
        'image_id',
    ];
}
