<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetInTouch extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'city',
        'replay_time',
        'message',
    ];
}
