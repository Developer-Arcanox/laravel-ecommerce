<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = ["imagePath"];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
