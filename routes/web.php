<?php

Route::get('/', function () {
	$html = '<h1>Products</h1>';
	$html .= '<br>Name: Fridge';
	$html .= '<br>Name: Oven';
	$html .= '<br>Name: Couch';
	return $html;
});

