<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable=['name','reference_no','description','price','category_id','small','medium','large','xlarge','xxlarge','front_image','back_image','left_image','right_image'];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function colours()
	{
		return $this->belongsToMany('App\Colour', 'colour_product', 'product_id', 'colour_id');
	}

	public function sizes()
	{
		return $this->belongsToMany('App\Size', 'product_size', 'product_id', 'size_id');
	}

}
