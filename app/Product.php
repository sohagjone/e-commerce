<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	 //use SoftDeletes;
     protected $fillable = ['product_name', 'category_id', 'product_short_description', 'product_long_description',	'product_price', 'product_image', 'publication_status', 'created_at'];

     public function relationToCategory()
     {
     	return $this->hasOne('App\Category', 'id', 'category_id');
     }
}

