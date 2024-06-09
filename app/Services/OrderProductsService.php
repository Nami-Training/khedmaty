<?php

namespace App\Services;

use App\Models\OrderProduct;

class OrderProductsService extends MainService
{
    public function __construct()
    {
        parent::__construct(new OrderProduct);
    }
}
