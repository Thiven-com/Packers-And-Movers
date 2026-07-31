<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'short_description',
        'description',
        'image',
        'banner',
        'feature_1',
        'feature_2',
        'feature_3',
        'feature_4',
        'slug',
        'status',
    ];
}
