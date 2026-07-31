<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceEnquiry extends Model
{
    protected $fillable = [
        'service',
        'house_size',
        'name',
        'mobile',
        'email',
        'moving_date',
        'from_location',
        'to_location',
        'message',
    ];

}
