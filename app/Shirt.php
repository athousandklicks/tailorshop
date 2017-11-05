<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shirt extends Model
{
    protected $table = 'shirts';

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
