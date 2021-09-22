<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    /**
     * @var string
     */
    protected $table = 'societies';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
