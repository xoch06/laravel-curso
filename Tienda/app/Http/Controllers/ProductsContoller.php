<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;

class ProductsContoller extends Controller
{
 
public function index()
 {
	$products = Product::all();
	return view('productos.index', compact('products'));
 }

public function show(Product $product)
 {
 	//$product = Product::find($id);
 	
 	return view('productos.detalle', compact('product'));   //
 }
}
