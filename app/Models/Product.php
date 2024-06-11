<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'code',
        'price',
        'type',
        'category_id',
        'store_id',
        'department_id',
        'offer_id',
    ];


    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }

    public function manufactures()
    {
        return $this->belongsToMany(Manufacture::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'item_id');
    }

    public function wishlist()
    {
        return $this->hasOne(Wishlist::class, 'item_id');
    }

}
