<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'rental_id',
        'payment_method',
        'amount',
        'proof_image',
        'status',
        'verified_by',
        'paid_at'
    ];


    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }


    public function verifier()
    {
        return $this->belongsTo(User::class, 'verified_by');
    }
}