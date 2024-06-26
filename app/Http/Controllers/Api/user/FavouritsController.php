<?php

namespace App\Http\Controllers\Api\user;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Resources\StoreResource;
use App\Services\ProductService;
use App\Services\StoreService;
use Illuminate\Http\Request;

class FavouritsController extends Controller
{
    public function show($id, ProductService $productService, StoreService $storeService)
    {
        return response()->json([
            'data' => [
                'products' => ProductResource::collection($productService->favourits($id)),
                'stores' => StoreResource::collection($storeService->favourits($id))
            ],
            'error' => ''
        ],200);
    }
}
