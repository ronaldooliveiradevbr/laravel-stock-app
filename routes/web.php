<?php

Route::get('/', 'ProductsController@list');
Route::get('/{product}', 'ProductsController@show');

