<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'brand_id',
        'category_id',
        'short_description',
        'description',
        'price',
        'discounted_price',
        'discount',
        'image_url',
        'reviews_count'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getDiscountedPriceAttribute($value)
    {
        return ($this->discount > 0 && $value > 0) ? $value : $this->price;
    }

    public function images()
    {
        return $this->hasMany(\App\Models\ProductImage::class);
    }
}
