<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Government extends Model
{
    /**
     * @var string
     */
    protected $table = 'governments';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
