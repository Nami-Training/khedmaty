<?php

namespace App\Http\Controllers;

use App\Services\WishlistService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{

    public function add_store(Request $request, WishlistService $wishlistService)
    {
        if(Auth::guard('web')->check()){
            $wishlist = $wishlistService->findByColumnWhere('item_id', $request->to_user_id, 'type', 'store');
            if(isset($wishlist[0]['item_id'])){
                $wishlistService->delete($wishlist[0]['id']);
            }else{
                $wishlistService->create([
                    'type' => 'store',
                    'user_id' => Auth::guard('web')->user()->id,
                    'item_id' => $request->to_user_id
                ]);
            }
        }

        return Response()->json(['code' => 200, 'message' => 'Success']);
    }


    public function add_product(Request $request, WishlistService $wishlistService)
    {
        if(Auth::guard('web')->check()){
            $wishlist = $wishlistService->findByColumnWhere('item_id', $request->product_id, 'type', 'product');
            if(isset($wishlist[0]['item_id'])){
                $wishlistService->delete($wishlist[0]['id']);
            }else{
                $wishlistService->create([
                    'type' => 'product',
                    'user_id' => Auth::guard('web')->user()->id,
                    'item_id' => $request->product_id
                ]);
            }
        }
        return Response()->json(['code' => 200, 'wh' =>$wishlist, 'message' => 'Success']);
    }
}
