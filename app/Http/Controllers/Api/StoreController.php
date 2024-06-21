<?php

namespace App\Http\Controllers\Api;

use App\Services\CarService;
use Illuminate\Http\Request;
use App\Services\BrandService;
use App\Services\StoreService;
use App\Services\ProductService;
use App\Services\WishlistService;
use App\Services\DepartmentService;
use App\Http\Controllers\Controller;
use App\Services\ManufactureService;
use App\Http\Resources\StoreResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\DepartmentResource;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StoreService $storeService)
    {
        return response()->json([
            'data' => [
                'stores' => StoreResource::make($storeService->all()),
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, StoreService $storeService, ProductService $productService)
    {

        return response()->json([
            'data' => [
                'store' => StoreResource::make($storeService->findById($id)),
                'products' => ProductResource::collection($productService->findByColumn('store_id', $id))
            ],
            'error' => ''
        ],200);
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
