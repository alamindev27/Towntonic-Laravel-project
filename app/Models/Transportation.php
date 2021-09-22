<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
     /**
     * @var string
     */
    protected $table = 'transportations';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
