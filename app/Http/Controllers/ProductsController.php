<?php

namespace Stock\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list()
    {
		$html = '<h1>Products</h1>';
		$html .= '<br>Name: Fridge';
		$html .= '<br>Name: Oven';
		$html .= '<br>Name: Couch';
		return $html;	
    }
}

