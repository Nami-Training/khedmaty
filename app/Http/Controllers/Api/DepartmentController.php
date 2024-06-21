<?php

namespace App\Http\Controllers\Api;

use App\Services\CarService;
use Illuminate\Http\Request;
use App\Services\BrandService;
use App\Services\ProductService;
use App\Services\WishlistService;
use App\Services\DepartmentService;
use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResource;
use App\Http\Resources\CarResource;
use App\Services\ManufactureService;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ProductResource;
use App\Http\Resources\DepartmentResource;
use App\Http\Resources\ManufactureResource;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DepartmentService $departmentService)
    {
        return response()->json([
            'data' => [
                'departments' => DepartmentResource::collection($departmentService->all()),
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
    public function show(string $id, DepartmentService $departmentService, BrandService $brandService, CarService $carService, ManufactureService $manufactureService, ProductService $productService, WishlistService $wishlistService)
    {
        return response()->json([
            'data' => [
                'department' => DepartmentResource::make($departmentService->findById($id)),
                'products' => ProductResource::collection($productService->findByColumn('department_id', $id)),
                'brands' => BrandResource::collection( $brandService->all()),
                'cars' => CarResource::collection($carService->all()),
                'manufactures' => ManufactureResource::collection($manufactureService->all()),
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

    public function search(Request $request, ProductService $productService)
    {
        return response()->json([
            'data' => [
                'products' => ProductResource::collection($productService->search($request->name, $request->department_id)),
            ],
            'error' => ''
        ],200);
    }

    public function filter(Request $request, ProductService $productService)
    {
        return response()->json([
            'data' => [
                'products' => ProductResource::collection($productService->filter($request->department_id, $request)),
            ],
            'error' => ''
        ],200);
    }
}
