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

Route::get('/', function () {
	$products = App\Product::existencia();
    return view('productos.index',compact('products'));
});

Route::get('/detalle/{id}', function($id) {
 $product = App\Product::find($id);
 return view('productos.detalle', compact('product'));
});