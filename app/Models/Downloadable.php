<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Downloadable extends Model
{
    /**
     * @var string
     */
    protected $table = 'downloadables';

    /**
     * @var array
     */
    protected $fillable = ['title','down_form'];
}
