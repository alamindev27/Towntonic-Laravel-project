<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyTaiwan extends Model
{
    /**
     * @var string
     */
    protected $table = 'study_taiwans';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
