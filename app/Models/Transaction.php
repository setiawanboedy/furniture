<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'users_id',
        'date',
        'transaction_total',
        'prove',
        'transaction_status'
       ];

    protected $hidden = [];

    public function user()
    {
        return $this->belongsTo(User::class,'users_id', 'id');
    }
    public function details(){
        return $this->hasMany( TransactionDetail::class, 'transaction_id', 'id' );
    }
}
