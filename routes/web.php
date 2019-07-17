<?php

Route::redirect('', 'products');

Route::resource('products', 'ProductsController');
