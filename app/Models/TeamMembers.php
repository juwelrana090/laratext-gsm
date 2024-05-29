<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMembers extends Model
{
    use HasFactory;
    protected $fillable = [
        'businesses_id',
        'name',
        'designation',
        'years_of_experience',
        'language',
        'profile_image',
        'image_id',
    ];
}
