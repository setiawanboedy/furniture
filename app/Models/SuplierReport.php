<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuplierReport extends Model
{
    use HasFactory;
    protected $fillable = [
        'suplier_id',
        'note',
        'file'

    ];

    protected $hidden = [];

    public function user_suplier()
    {
        return $this->belongsTo(User::class,'suplier_id', 'id');
    }
}
