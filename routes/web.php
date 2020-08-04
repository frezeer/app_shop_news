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

Route::get('/admin/products','ProductController@index'); //Listado de Productos
Route::get('/admin/products/create','ProductController@create'); //Listado de Productos
Route::post('/admin/products','ProductController@store'); //registrar

Route::get('/admin/products/{id}/edit','ProductController@edit'); //Listado de Productos
Route::post('/admin/products/{id}/edit','ProductController@update'); //registrar
Route::get('/admin/products/{id}/delete','ProductController@destroy'); //Borrar Productos