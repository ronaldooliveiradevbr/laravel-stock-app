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

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
	$data = $request->all();

	Product::create($data);

	$request->session()->flash(
            'message',
	    "Product {$data['name']} added successfuly"
        );

        return redirect('/products');
    }
}

