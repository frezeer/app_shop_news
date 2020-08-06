<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','TestController@welcome');

Route::get('/suma', function () 
{
	$a = 10;
	$b = 45;
	$c = $a + $b;
    return "El valor de la suma es = $c";
});
Route::get('/prueba', function () {
    return "hola soy una ruta de prueba";
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}','ProductController@show');


// Route::middleware(['auth','admin'])->group(function () {
//        Route::get('/admin/products','ProductController@index'); //Listado de Productos
// 	   Route::get('/admin/products/create','ProductController@create'); //Listado de Productos
//        Route::post('/admin/products','ProductController@store'); //registrar
//        Route::get('/admin/products/{id}/edit','ProductController@edit'); //editar productos vista
//        Route::post('/admin/products/{id}/edit','ProductController@update'); //editar Productos desde post (guardando formulario)
//        Route::delete('/admin/products/{id}','ProductController@destroy'); //Borrar Productos
// });


Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function () 
{
       Route::get('/products','ProductController@index'); //Listado de Productos
	     Route::get('/products/create','ProductController@create'); //Listado de Productos
       Route::post('/products','ProductController@store'); //registrar
       Route::get('/products/{id}/edit','ProductController@edit'); //editar productos vista
       Route::post('/products/{id}/edit','ProductController@update'); 
       //editar Productos desde post (guardando formulario)
       Route::delete('/products/{id}','ProductController@destroy'); //Borrar Productos

       Route::get('/products/{id}/images','ImageController@index'); //editar productos vista
       Route::post('/products/{id}/images','ImageController@store'); //editar productos vista
       Route::delete('/products/{id}/images','ImageController@destroy'); //editar productos vista
       Route::get('/products/{id}/images/select/{image}','ImageController@select'); //editar productos vista
});
