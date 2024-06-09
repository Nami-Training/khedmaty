<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function index(ProductService $productService)
    {
        $carts = Cart::content();
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
        return view('user.checkout', get_defined_vars());
    }
}
