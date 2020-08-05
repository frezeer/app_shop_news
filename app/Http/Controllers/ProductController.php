<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::paginate(10);
    	return view('admin.products.index')->with(compact('products'));
    }
     
   public function create(){
    	return view('admin.products.create');
    }

   public function store(Request $request){
    	//registrar el nuevo prodcuto en la base de datos
        //dd($request->all());
        
        $messages =[
            'name.required' => 'El nombre es Requerido',
            'name.min'      => 'Se Requieren minimo 3 caracteres para el nombre del producto',
            'description.required' => 'Se Requiere una descricion',
            'descripcion.max'      => 'La descricion admite un maximo de 200 caracteres', 
            'price.required' => 'Se Requiere el Precio del Producto',
            'price.numeric'  => 'Se Requiere que el valor del precio sea numerico',
            'price.min'      => 'Se Rquiere que el Precio no sea Negativo',
            'long_description.required' => 'Se Requiere una Descripcion extensa del Producto'];
        
        $rules = [
            'name'        => 'required|min:3',
            'description' => 'required|max:200',
            'price'       => 'required|numeric|min:0',
            'long_description' => 'required'];

        $this->validate($request , $rules, $messages);

        $product = new product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        $product->save();

        return redirect('/admin/products');
    }


    public function edit($id){
         //return "Mostrar Aqui el Form de edcicion para el producto con id $id";
         $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product'));
    }

   public function update(Request $request , $id){
        //registrar el nuevo prodcuto en la base de datos
        //dd($request->all());

        $messages =[
            'name.required' => 'El nombre es Requerido',
            'name.min'      => 'Se Requieren minimo 3 caracteres para el nombre del producto',
            'description.required' => 'Se Requiere una descricion',
            'descripcion.max'      => 'La descricion admite un maximo de 200 caracteres', 
            'price.required' => 'Se Requiere el Precio del Producto',
            'price.numeric'  => 'Se Requiere que el valor del precio sea numerico',
            'price.min'      => 'Se Rquiere que el Precio no sea Negativo',
            'long_description.required' => 'Se Requiere una Descripcion extensa del Producto'];
        
        $rules = [
            'name'        => 'required|min:3',
            'description' => 'required|max:200',
            'price'       => 'required|numeric|min:0',
            'long_description' => 'required'];

        $this->validate($request , $rules, $messages);


        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        $product->save(); //update

        return redirect('/admin/products');
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete(); //borrar
        return back()->with('notification','El usuario se ha borrado correctamente');
    }
}
