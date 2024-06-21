<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use App\Services\ProductService;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'data' => [
                'carts' => CartResource::collection(Cart::content())
            ],
            'error' => ''
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , ProductService $productService)
    {
        $product = $productService->findById($request->product_id);
        if (Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $request->product_qty,
            'price' => $product->price,
            'options' => [
                'image' => $product->images[0]->image
            ]
        ])){
            return response()->json([
                'data' => [
                    'cart' => CartResource::collection(Cart::content()),
                    'cart_count' => Cart::count(),
                    'total' => Cart::subtotal(),
                    'message' =>  'The item was added successfully'
                ],
                'error' => ''
            ],200);
        }

        return response()->json([
            'data' => [],
            'error' => 'Cant Add this item'
        ],422);
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

    public function update_cart(Request $request)
    {
        $cart = Cart::get($request->rowId);
        Cart::update($cart->rowId, ['qty' => $request->product_qty]);

        return response()->json([
            'data' => [
                'cart' => CartResource::collection(Cart::content()),
                'cart_count' => Cart::count(),
                'total' => Cart::subtotal(),
                'message' =>  'The item was added successfully'
            ],
            'error' => ''
        ],200);
    }

    public function cart_delete(Request $request)
    {
        $cart = Cart::get($request->cart_id);

        if($cart->rowId){
            Cart::remove($cart->rowId);

            return response()->json([
                'data' => [
                    'cart' => CartResource::collection(Cart::content()),
                    'cart_count' => Cart::count(),
                    'total' => Cart::subtotal(),
                    'message' =>  'The item was added successfully'
                ],
                'error' => ''
            ],200);
        }

        return response()->json([
            'data' => [],
            'error' => 'Cant delete this item'
        ],422);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
