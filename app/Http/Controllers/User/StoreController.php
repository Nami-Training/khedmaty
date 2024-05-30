<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Manufacture;
use App\Services\BrandService;
use App\Services\CarService;
use App\Services\DepartmentService;
use App\Services\ManufactureService;
use App\Services\ProductService;
use App\Services\StoreService;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StoreService $storeService)
    {
        $stores = $storeService->all();
        return view('user.stores', get_defined_vars());
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
    public function show(string $id, StoreService $storeService, DepartmentService $departmentService, BrandService $brandService, CarService $carService, ManufactureService $manufactureService, ProductService $productService)
    {
        $store = $storeService->findById($id);
        $departments = $departmentService->all();
        $brands = $brandService->all();
        $cars = $carService->all();
        $manufactures = $manufactureService->all();
        $products = $productService->findByColumn('store_id', $id);
        return view('user.storeItem', get_defined_vars());
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
