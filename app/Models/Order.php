<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'address',
        'payment_method',
        'notes',
        'status',
        'order_date',
        'user_id',
        'total',
        'store_id'
    ];

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class, 'order_id', 'id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
