<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductImage;  
use File; 

class ImageController extends Controller
{
    public function index($id)
    {
    	$product = Product::find($id);
    	$images  = $product->images()->orderBy('featured','desc')->get();
    	//dd($product);
    	return view('admin.products.images.index')->with(compact('product','images'));
    }

    public function store(Request $request, $id)
    {   
        //guardar la imagen en nuestro proyecto
        $file = $request->file('photo');
        $path = public_path().'/images/product';
        $fileName  = uniqid(). $file->getClientOriginalName();
        $moved = $file->move($path, $fileName);
        //guardar en la base de datos
        if($moved){
            $productImage = new ProductImage();
            $productImage->image = $fileName;
            $productImage->Product_id = $id;    
            $productImage->save();
        }
        return back();                   
    }

    public function destroy(Request $request,$id){
        //eliminar el archvio
        //$productImage = ProductImage::find($request->input('image_id'));
        $productImage = ProductImage::find($request->image_id);
        
        if(substr($productImage, 0, 4) !== "http" ){
            $deleted = true;
        }else{
            $fullPath = public_path().'/images/product/'.$productImage;
            $deleted = File::delete($fullPath);     
        } 
        if($deleted){
            $productImage->delete();
        }
        return back();
    }

    public function select($id, $image){
        
        ProductImage::where('product_id', $id)->update(['featured' => false]);
        
        $productImage = ProductImage::find($image);
        $productImage->featured = true;
        $productImage->save();

        return back();
    }
}
