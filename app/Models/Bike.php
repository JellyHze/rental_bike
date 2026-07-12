<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'code',
        'description',
        'price_per_day',
        'stock',
        'status',
        'image'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function rentalDetails()
    {
        return $this->hasMany(RentalDetail::class);
    }


    public function maintenanceLogs()
    {
        return $this->hasMany(MaintenanceLog::class);
    }
}