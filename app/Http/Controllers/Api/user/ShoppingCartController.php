<?php

namespace App\Http\Controllers\Api\user;

use Illuminate\Http\Request;
use App\Services\OrderService;
use App\Services\StoreService;
use App\Services\ProductService;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use Illuminate\Support\Facades\Auth;
use App\Services\OrderProductsService;
use Nafezly\Payments\Classes\PaymobPayment;
use Gloudemans\Shoppingcart\Facades\Cart;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProductService $productService)
    {
        $carts = Cart::content();
        $products = [];
        foreach($carts as $cart){
            $product = $productService->findById($cart->id);
            $products[] = [
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->images[0]->image,
                'qty' => $cart->qty,
                'total' => $cart->qty * $cart->price,
                'store_id' => $product->store_id,
                'product_id' => $product->id
            ];
        }
        return response()->json([
            'data' => [
                'products' => $products,
            ],
            'error' => ''
        ],200);
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
                return response()->json([
                    'data' => [],
                    'error' => 'All products must be from the same store.!'
                ],422);
            }
        }
        if($fProduct->store->offer_status == '0'){
            return response()->json([
                'data' => [],
                'error' => 'store disactive.!'
            ],422);
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
            'user_id' => Auth::guard('api')->user()->id,
            'store_id' => $fProduct->store->id
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

            return response()->json([
                'data' => [
                    'order' => OrderResource::make($order),
                    'redirectUrl' => '',
                    'message' =>  'your order added successfully'
                ],
                'error' => ''
            ],200);
        }
        return response()->json([
            'data' => [
                'order' => OrderResource::make($order),
                'message' =>  'your order added successfully'
            ],
            'error' => ''
        ],200);
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
