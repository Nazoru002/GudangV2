<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'stuff_id',
        'stock_cap',
        'stock_in',
        'stock_out',
        'stock_adj',
        'stock_date'
    ];
}
