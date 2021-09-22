<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    /**
     * @var string
     */
    protected $table = 'sports';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
