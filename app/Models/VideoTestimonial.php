<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoTestimonial extends Model
{
    //
    protected $fillable = [
        'title',
        'customer_name',
        'youtube_video',
        'description',
        'status',
        'sort_order',
    ];
}
