<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'banner_title',
        'banner_image',
        'banner_link',
        'banner_position',
        'banner_status',
        'image_id',
    ];
}
