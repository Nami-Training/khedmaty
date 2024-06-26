<?php

namespace App\Services;

use App\Models\Order;
use Illuminate\Support\Carbon;

class OrderService extends MainService
{
    public function __construct()
    {
        parent::__construct(new Order);
    }

    public function profit_lastMonth($column, $value)
    {
        return Order::where($column, $value)->whereDate('created_at', now()->subMonth())->sum('total');
    }

    public function order_lastMonth($column, $value)
    {
        return Order::where($column, $value)->whereDate('created_at', now()->subMonth())->count();
    }
}
