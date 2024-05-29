<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileManager extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_name',
        'file_type',
        'file_format',
        'file_thumbnail',
        'file_path',
    ];
}
