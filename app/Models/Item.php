<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function brand()
    {
        return $this->belongsTo('App\Models\ProductBrand', 'product_brand_id');
    }

    public function specifications()
    {
        return $this->hasMany('App\Models\ItemSpecification');
    }

    public function descriptions()
    {
        return $this->hasMany('App\Models\ItemDescription');
    }
}
