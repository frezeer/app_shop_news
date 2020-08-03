<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //Product Image pertenece a un producto determinado
    public function product(){
    	return $this->belongTo(product::class);
    }
    
}
