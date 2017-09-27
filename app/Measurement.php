<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    	public function fabrics()
	{
		return $this->belongsTo(Fabric::class);
	}
}
