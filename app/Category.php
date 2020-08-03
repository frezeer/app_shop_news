<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //una categoria pertenece a muchos productos
    //category->product
      public function products(){
    	return($this->hasMany(product::class));
    }
    
}
