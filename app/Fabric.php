<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabric extends Model
{
        public function measurements()
    {
//        return $this->hasMany('App\Product');
        return $this->hasMany(Measurement::class);
    }
}
