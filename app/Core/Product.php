<?php

namespace Stock\Core;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
	'description',
	'price',
	'quantity',
        'size',
    ];
}
