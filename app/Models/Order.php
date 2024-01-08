<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_order';

    protected $guarded = [];

    public function address()
    {
        return $this->belongsTo(Address::class, 'id_user');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'id_order');
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'id_seller');
    }
    
}
