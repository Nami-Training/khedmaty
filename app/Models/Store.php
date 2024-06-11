<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'country_code',
        'phone',
        'password',
        'address',
        'image',
        'commercial_image',
        'store_category',
        'offer_status'
    ];

    public function wishlist()
    {
        return $this->hasOne(Wishlist::class, 'item_id');
    }
}
