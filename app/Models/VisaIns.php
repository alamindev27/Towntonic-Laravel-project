<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisaIns extends Model
{
     /**
     * @var string
     */
    protected $table = 'visa_ins';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
