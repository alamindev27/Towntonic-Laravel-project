<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    /**
     * @var string
     */
    protected $table = 'educations';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
