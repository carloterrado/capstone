<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refregion extends Model
{
    use HasFactory;

    public function province()
    {
        return $this->hasMany(Refprovince::class,'regCode')->with('city');
    }
}
