<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_category';

    protected $fillable = [
        'id_user',
        'id_category_admin',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'id_category');
    }

    public function categoryAdmin()
    {
        return $this->belongsTo(CategoryAdmin::class, 'id_category_admin');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
