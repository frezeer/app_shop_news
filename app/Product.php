<?php

namespace App;
use App\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
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


