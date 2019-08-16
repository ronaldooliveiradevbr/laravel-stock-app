<?php

namespace Stock\Core;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Product extends Model
{
	use LogsActivity;

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'size',
    ];

	protected static $logFillable = true;

	protected static $logOnlyDirty = true;
}
