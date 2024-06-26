<?php

namespace App\Http\Controllers\Api\store;

use Illuminate\Http\Request;
use App\Services\OrderService;
use Illuminate\Support\Carbon;
use App\Services\ProductService;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Services\StoreService;

class HomeController extends Controller
{
    public function index(Request $request, ProductService $productService, OrderService $orderService)
    {
        $product_num = count($productService->findByColumn('store_id', $request->store_id));
        $new_order = count($orderService->where('store_id', $request->store_id)->where('status', 'new'));
        $current_order = count($orderService->where('store_id', $request->store_id)->where('status', 'current'));
        $completed_order = count($orderService->where('store_id', $request->store_id)->where('status', 'completed'));
        $profit_lastMonth = $orderService->profit_lastMonth( 'store_id', $request->store_id);
        $order_lastMonth = $orderService->order_lastMonth( 'store_id', $request->store_id);
        $moreSold = $productService->moreSold_store($request->store_id);

        return response()->json([
            'data' => [
                'product_num' => $product_num,
                'new_order' => $new_order,
                'current_order' => $current_order,
                'completed_order' => $completed_order,
                'profit_lastMonth' => $profit_lastMonth,
                'order_lastMonth' => $order_lastMonth,
                'moreSold' => ProductResource::collection($moreSold)
            ],
            'error' => ''
        ],200);
    }


    public function wallet(Request $request, StoreService $storeService)
    {
        $store_balance = $storeService->profit($request->store_id);

        return response()->json([
            'data' => [
                'store_balance' => $store_balance
            ],
            'error' => ''
        ],200);
    }
}
