<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeInfo extends Model
{
    /**
     * @var string
     */
    protected $table = 'home_infos';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
