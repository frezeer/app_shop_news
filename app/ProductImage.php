<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductImage extends Model
{
    //Product Image pertenece a un producto determinado
    public function product(){
    	return $this->belongTo(product::class);
    }

    public function getUrlAttribute(){
    	if(substr($this->image, 0, 4) === "http"){
    		return $this->image; 
    	}
    	return '/images/product/' . $this->image;;
    }

}
