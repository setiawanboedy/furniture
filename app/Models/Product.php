<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\ProductFactory;
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'suplier_id',
        'name',
        'slug',
        'category',
        'image',
        'price',
        'desc',
    ];

    protected $hidden = [];
    protected static function newFactory()
    {
        return ProductFactory::new();
    }

    public function product_galleries(){
        return $this->hasMany(Gallery::class, 'product_id', 'id');
    }

    public function ratings()
    {
        return $this->hasMany(ProductRating::class, 'product_id', 'id');
    }

}
