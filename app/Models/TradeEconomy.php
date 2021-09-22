<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradeEconomy extends Model
{
    /**
     * @var string
     */
    protected $table = 'trade_economies';

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
