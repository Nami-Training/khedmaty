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
            $wishlist = $wishlistService->create([
                'type' => 'store',
                'user_id' => Auth::guard('web')->user()->id,
                'item_id' => $request->to_user_id
            ]);
        }
        return Response()->json(['code' => 200, 'message' => 'Success']);
    }
}
