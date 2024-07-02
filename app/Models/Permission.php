<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'users',
        'banners',
        'store_categories',
        'departments',
        'categories',
        'brands',
        'cars',
        'stores',
        'clients',
        'products',
        'orders',
        'faqs',
        'testimonials',
        'blogs',
        'settings',

    ];


    public function actions()
    {
        return $this->hasMany(Action::class);
    }
}
