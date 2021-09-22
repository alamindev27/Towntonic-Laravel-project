<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoryPolitics extends Model
{
    /**
     * @var string
     */
    protected $table = 'history_politics';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
