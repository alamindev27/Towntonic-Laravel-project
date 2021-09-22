<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScholarshipGuideline extends Model
{
    /**
     * @var string
     */
    protected $table = 'scholarship_guidelines';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
