<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'clients_create',
        'clients_read',
        'clients_update',
        'clients_delete',
        'settings_create',
        'settings_read',
        'settings_update',
        'settings_delete',
    ];
}
