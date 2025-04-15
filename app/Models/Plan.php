<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Plan extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'stripe_price_id',
        'price',
        'features',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
