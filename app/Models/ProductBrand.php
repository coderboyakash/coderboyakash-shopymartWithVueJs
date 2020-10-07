<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo('App\Models\ProductType','product_type_id');
    }

    public function items()
    {
        return $this->hasMany('App\Models\Item');
    }
}
