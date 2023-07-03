<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'image'
       ];

    protected $hidden = [];
    protected static function newFactory()
{
    return GalleryFactory::new();
}
    /**
     * Get the travel_package that owns the Gallery
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id', 'id');
    }
}
