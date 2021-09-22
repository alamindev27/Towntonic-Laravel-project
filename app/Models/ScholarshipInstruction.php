<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScholarshipInstruction extends Model
{
     /**
     * @var string
     */
    protected $table = 'scholarship_instructions';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
