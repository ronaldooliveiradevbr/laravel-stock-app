<?php

namespace Stock\Http\Controllers;

use Stock\Core\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list()
    {
        return view('products.list')->with('products', Product::all());
	}

	public function show(Product $product) 
	{                         
		return view('products.show')->with('product', $product);
	}
}

