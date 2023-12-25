<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryAdmin extends Model
{
    use HasFactory;
    protected $table = 'category_admins';

    protected $primaryKey = 'id_category_admin';

    protected $fillable = [
        'category',
        'icon',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class, 'id_category_admin');
    }
}
