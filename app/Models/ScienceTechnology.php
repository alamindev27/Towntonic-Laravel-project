<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScienceTechnology extends Model
{
    /**
     * @var string
     */
    protected $table = 'science_technologies';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
