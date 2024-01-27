<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Di dalam model Product
    protected $primaryKey = 'id_produk';


    protected $fillable = [
        'id_user',
        'id_category',
        'produkName',
        'price',
        'photo',
        'vidio',
        'stock',
        'detail'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Di dalam model Product
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id_category');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
