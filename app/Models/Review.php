<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'business_id',
        'expert_id',
        'name',
        'email',
        'description',
        'rating',
        'type',
        'status',
    ];
}

