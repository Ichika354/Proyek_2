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
        'province_id',
        'regency_id',
        'district_id',
        'village_id',
        'patokan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function provinsi() {
        return $this->belongsTo(Province::class,'province_id');
    }

    public function kabupaten() {
        return $this->belongsTo(Regency::class,'regency_id');
    }

    public function kecamatan() {
        return $this->belongsTo(District::class,'district_id');
    }

    public function desa() {
        return $this->belongsTo(Village::class,'village_id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'id_user');
    }
}
