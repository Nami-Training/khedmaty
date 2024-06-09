<?php

namespace App\Services;

use App\Models\Order;

class OrderService extends MainService
{
    public function __construct()
    {
        parent::__construct(new Order);
    }
}
