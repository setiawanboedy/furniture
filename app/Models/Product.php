<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'image',
        'price',
        'desc',
    ];

    protected $hidden = [];

    public function product_galleries(){
        return $this->hasMany(Gallery::class, 'product_id', 'id');
    }

    public function ratings()
    {
        return $this->hasMany(ProductRating::class, 'product_id', 'id');
    }
}
