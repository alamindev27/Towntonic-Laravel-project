<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtsCulture extends Model
{
    /**
     * @var string
     */
    protected $table = 'arts_cultures';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
