<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\OrderProductsService;
use App\Services\OrderService;
use App\Services\ProductService;
use App\Services\StoreService;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, OrderService $orderService, OrderProductsService $orderProductsService, ProductService $productService, StoreService $storeService)
    {
        $products_ids = array_keys($request->product_list);
        $fProduct = $productService->findById($products_ids[0]);
        foreach($products_ids as $id){
            $sProduct = $productService->findById($id);
            if($fProduct->store->id != $sProduct->store->id){
                return Response()->json(['code' => 422,'message' => 'All products must be from the same store.!'], 422);
            }
        }
        if($fProduct->store->offer_status == '0'){
            return Response()->json(['code' => 422,'message' => 'store disactive.!'], 422);
        }

        $code = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
        while (count($productService->findByColumn('code', $code))) {
            $code = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
        }

        $data = [
            'title' => $code,
            'type' => $request->type,
            'payment_method' => $request->payment_method,
            'notes' => $request->notice,
            'status' => 'new',
            'order_date' => now(),
            'total' => Cart::subtotal(),
            'user_id' => Auth::guard('web')->user()->id
        ];
        if ($request->type == 'delivery'){
            $data['address'] = $request->address;
        }

        $order = $orderService->create($data);

        foreach ($request->product_list as $product) {
            $orderProductsService->create([
                'product_id' => $product['product_id'],
                'qty' => $product['amount'],
                'order_id' => $order->id
            ]);
        }

        Cart::destroy();

        if($request->payment_method == 'online'){
            return Response()->json(['code' => 200, 'data' => ['order' => $order, 'redirectUrl' => ''], 'message' => 'Success']);
        }
        return Response()->json(['code' => 200, 'data' => ['order' => $order], 'message' => 'Success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
