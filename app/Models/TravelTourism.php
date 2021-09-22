<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelTourism extends Model
{
    /**
     * @var string
     */
    protected $table = 'travel_tourisms';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
