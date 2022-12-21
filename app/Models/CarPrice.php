<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarPrice extends Model
{
    use HasFactory;

    public function regions()
    {
        return $this->belongsTo(Refregion::class,'reg_id');
    }
}
