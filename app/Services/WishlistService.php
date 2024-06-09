<?php

namespace App\Services;

use App\Models\Wishlist;

class WishlistService extends MainService
{
    public function __construct()
    {
        parent::__construct(new Wishlist);
    }
}
