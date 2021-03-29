<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
