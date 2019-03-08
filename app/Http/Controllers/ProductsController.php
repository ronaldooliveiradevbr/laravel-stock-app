<?php

namespace Stock\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list()
    {
		$products = [
			['name' => 'Fridge'],
			['name' => 'Oven'],
			['name' => 'Couch'],
		];

        return view('products.list')->with('products', $products);
    }
}

