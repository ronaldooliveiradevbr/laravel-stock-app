<?php

namespace Stock\Http\Controllers;

use Stock\Core\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.index')->with('products', Product::all());
    }

    public function show(Product $product) 
    {                         
        return view('products.show')->with('product', $product);
    }
}

