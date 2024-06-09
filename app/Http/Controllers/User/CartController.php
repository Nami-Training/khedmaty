<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = Cart::content();
        return view('user.shopping-cart', get_defined_vars());
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
            $carts = Cart::content();
            return Response()->json(['code' => 200, 'cart' => [
                'cart_count' => Cart::count(),
                'total' => Cart::subtotal(),
                'minicart' => view('user.components.minicart', get_defined_vars())->render()
            ], 'message' => 'Success']);
        }

        return Response()->json(['code' => 400, 'message' =>  'Cant Add this item']);
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
        $carts = Cart::content();

        return Response()->json(['code' => 200, 'cart' => [
            'cart_count' => Cart::count(),
            'total' => Cart::subtotal(),
            'minicart' => view('user.components.minicart', get_defined_vars())->render(),
            'cartData' => view('user.components.cart', get_defined_vars())->render()
        ], 'message' => 'Success']);
    }

    public function cart_delete(Request $request, ProductService $productService)
    {
        $cart = Cart::get($request->cart_id);

        if($cart->rowId){
            Cart::remove($cart->rowId);
            $carts = Cart::content();
            return Response()->json(['code' => 200, 'cart' => [
                'cart_count' => Cart::count(),
                'total' => Cart::subtotal(),
                'minicart' => view('user.components.minicart', get_defined_vars())->render(),
                'cartData' => view('user.components.cart', get_defined_vars())->render()
            ], 'message' => 'Success']);
        }

        return Response()->json(['code' => 400, 'message' =>  'Cant delete this item']);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
