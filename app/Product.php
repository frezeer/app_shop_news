<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	//implementando softdeletes
	//https://programacionymas.com/series/aprende-laravel-desarrollando-un-sistema/soft-deletes
	use SoftDeletes;

    //un producto pertenece auna categoria
  	//$product->category

  public function category(){
  		return $this->belongsTo(Category::class);
  }


  //$product->images()
  public function images(){
  		return $this->hasMany(ProductImage::class);
  }

}


