<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'client_id',
        'stripe_customer_id',
        'transaction_id',
        'status',
        'amount',
        'date',
    ];
    protected $casts = [
        'date' => 'datetime', //  ceci va convertir automatiquement en Carbon
    ];
    public function client()
    {
        return $this->belongsTo(\App\Models\User::class, 'client_id');
    }
    /**
     * Get the client associated with the order.
     */
}
