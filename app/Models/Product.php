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
        'stock',
        'detail'
    ];

    // Di dalam model Product
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id_category');
    }
}
