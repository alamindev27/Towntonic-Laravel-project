<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    /**
     * @var string
     */
    protected $table = 'peoples';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
