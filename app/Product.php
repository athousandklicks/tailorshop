<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable=['name','description','price','category_id','small','medium','large','xlarge','xxlarge','front_image','back_image','left_image','right_image','detailed_image'];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	   public function colours()
    {
    	return $this->belongsToMany('App\Colour', 'colour_product', 'product_id', 'colour_id');
    }

}
