<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'contract',
        'price_month',
        'price_year',
        'description',
        'currency',
        'type',
    ];
}
