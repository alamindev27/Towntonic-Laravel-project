<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisaInfo extends Model
{
    /**
     * @var string
     */
    protected $table = 'visa_infos';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
