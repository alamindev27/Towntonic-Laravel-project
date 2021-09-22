<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsefulLink extends Model
{
    
     /**
     * @var string
     */
    protected $table = 'useful_links';

    /**
     * @var array
     */
    protected $fillable = ['title','url'];
}
