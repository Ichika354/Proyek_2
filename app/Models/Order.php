<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function address()
    {
        return $this->belongsTo(Address::class, 'id_user');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    
}
