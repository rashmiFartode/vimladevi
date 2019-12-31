<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [ 'category_id', 'file' ];

    public function category()
    {
        return $this->belongsTo('App/Category');
    }
}
