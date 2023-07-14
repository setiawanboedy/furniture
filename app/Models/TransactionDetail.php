<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;
use App\Models\Product;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'product_id',
        'image',
        'name',
        'price',
        'quantity',
        'total'
    ];

    protected $hidden = [

    ];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id', 'id');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class,'transaction_id', 'id');
    }
}
