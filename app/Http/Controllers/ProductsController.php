<?php

namespace Stock\Http\Controllers;

use Stock\Core\Product;
use Illuminate\Http\Request;
use Stock\Http\Requests\CreateProduct;

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
        return view('products.create')->with('product', new Product());
    }

    public function store(CreateProduct $request)
    {
	Product::create($request->all());

	$request->session()->flash('message', 'Product added successfuly');

        return redirect('/products');
    }

    public function edit(Product $product)
    {
        return view('products.edit')->with('product', $product);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

	\Session::flash('message', $product->name . ' edited successfuly!');
	
	return redirect('/products'); 
    }

    public function destroy(Product $product)
    {
        $product->delete();

        \Session::flash('message', 'Product deleted successfuly');

        return redirect('/products');
    }
}

