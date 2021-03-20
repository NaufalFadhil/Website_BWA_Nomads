<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'location', 'featured_event',
        'language', 'foods', 'departure_date', 'about',
        'duration', 'type', 'price'
    ];

    protected $hidden = [];
}
