<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Services\OrderService;
use App\Services\StoreService;
use App\Services\ProductService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Services\OrderProductsService;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Notifications\NewOrderNotification;
use App\Http\Controllers\Gatwayes\PaypalController;
use App\Http\Controllers\Gatwayes\StripeController;

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

        $total = Cart::subtotal();
        $data = [
            'title' => $code,
            'type' => $request->type,
            'payment_method' => $request->payment_method,
            'notes' => $request->notice,
            'status' => 'new',
            'order_date' => now(),
            'total' => $total,
            'user_id' => Auth::guard('web')->user()->id,
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

        $store = $storeService->findById($fProduct->store->id);
        $store->notify(new NewOrderNotification());

        if($request->payment_method == 'online'){

            // paypal
            // $paypal = new PaypalController();
            // $link = $paypal->payment(['price' => $total]);

            // stripe
            $stripe = new StripeController();
            $link = $stripe->payment(['price' => $total]);


            return Response()->json([
                'code' => 200,
                'data' => [
                    'order' => $order,
                    'redirectUrl' => $link
                ],
                'message' => 'Success']);
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
