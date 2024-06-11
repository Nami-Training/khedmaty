<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Services\OrderService;
use App\Http\Controllers\Controller;
use App\Services\OrderProductsService;
use App\Services\ProductService;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(OrderService $orderService)
    {
        $orders = $orderService->all();
        return view('user.myOrders', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, OrderService $orderService, OrderProductsService $orderProductsService, ProductService $productService)
    {
        $order = $orderService->findById($id);
        $orderProducts = $order->orderProducts;
        $products = [];
        foreach($orderProducts as $orderProduct){
            $product = $productService->findById($orderProduct->product_id);
            $products[] = [
                'product' => $product,
                'qty' => $orderProduct->qty,
                'total' => $orderProduct->qty * $product->price
            ];
        }
        return view('user.orderItem', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
