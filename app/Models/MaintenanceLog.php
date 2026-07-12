<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceLog extends Model
{
    protected $fillable = [
        'bike_id',
        'description',
        'cost',
        'maintenance_date',
        'status'
    ];


    public function bike()
    {
        return $this->belongsTo(Bike::class);
    }
}