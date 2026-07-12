<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalDetail extends Model
{
    protected $fillable = [
        'rental_id',
        'bike_id',
        'quantity',
        'price_per_day',
        'subtotal'
    ];


    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }


    public function bike()
    {
        return $this->belongsTo(Bike::class);
    }
}