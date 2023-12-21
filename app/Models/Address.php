<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_address';

    protected $fillable = [
        'id_user',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
