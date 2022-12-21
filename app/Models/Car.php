<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function carPhotos()
    {
        return $this->hasMany(CarPhoto::class,'car_id');
    }
    public function carPrice()
    {
        return $this->hasMany(CarPrice::class,'car_id')->with('regions');
    }
    public function carTypes()
    {
        return $this->belongsTo(CarType::class,'type_id');
    }
    public function carPriceRegion()
    {

    }
}