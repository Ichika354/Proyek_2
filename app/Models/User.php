<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'npm',
        'numberPhone',
        'password',
        'role',
        'address',
    ];

    public function getAuthIdentifierName()
    {
        return 'npm';
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'id_user');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'id_user');
    }

    public function address()
    {
        return $this->hasMany(Address::class, 'id_user');
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'id_buyer');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id_seller');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'id_user');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'id_seller');
    }



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
