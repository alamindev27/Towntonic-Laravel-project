<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutTaiwan extends Model
{
    /**
     * @var string
     */
    protected $table = 'about_taiwans';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
