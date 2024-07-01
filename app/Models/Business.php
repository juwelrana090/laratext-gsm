<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'uniqid',
        'contact_person_name',
        'contact_position',
        'contact_email',
        'contact_mobile',
        'contact_whatsapp',
        'contact_google_map',
        'contact_address',
        'contact_website',
        'contact_image',
        'contact_image_id',
        'company_name',
        'company_slug',
        'company_mobile',
        'company_description',
        'company_email',
        'business_price',
        'business_type',
        'business_hours',
        'business_images',
        'business_category_id',
        'business_category_title',
        'whatsapp_number',
        'social_media',
        'website',
        'city',
        'locations_id',
        'country',
        'status',
        'seo_title',
        'seo_keywords',
        'seo_description',
        'is_featured',
    ];
}
