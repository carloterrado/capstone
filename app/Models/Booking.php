<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function bookingInfo()
    {
        return $this->hasOne(BookingInfo::class,'booking_id');
    }
    public function bookingInfoId()
    {
        return $this->hasMany(BookingInfoId::class,'booking_id');
    }
    public function userInfo()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function carInfo()
    {
        return $this->belongsTo(Car::class,'car_id')->with('carTypes');
    }
}
