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

  public function getFeaturedImageUrlAttribute(){
    
    $featuredImage = $this->images()->where('featured', true)->first();
    
    if(!$featuredImage){
      $featuredImage = $this->images()->first();
    }

    if($featuredImage){
      return $featuredImage->url; 
    }

    return '/images/product/picture_not_available_400-300.png';
  }

}


