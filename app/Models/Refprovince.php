<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refprovince extends Model
{
    use HasFactory;
    public function city()
    {
        return $this->hasMany(Refcitymun::class,'provCode');
    }
}
