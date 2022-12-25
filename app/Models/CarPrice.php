<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarPrice extends Model
{
    use HasFactory;
    protected $fillable = [
        'edit-admin-car-price-ilocos-region',
        'add-admin-car-price-cagayan-valley',
        'add-admin-car-price-central-luzon',
        'add-admin-car-price-calabarzon',
        'add-admin-car-price-mimaropa',
        'add-admin-car-price-bicol-region',
        'add-admin-car-price-ncr',
        'add-admin-car-price-car',
    ];
           
    public function regions()
    {
        return $this->belongsTo(Refregion::class,'reg_id');
    }
}
