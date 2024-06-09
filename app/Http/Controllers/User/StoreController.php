<?php

namespace App\Http\Controllers\User;

use App\Models\Brand;
use App\Models\Manufacture;
use App\Services\CarService;
use Illuminate\Http\Request;
use App\Services\BrandService;
use App\Services\StoreService;
use App\Services\ProductService;
use App\Services\WishlistService;
use App\Services\DepartmentService;
use App\Http\Controllers\Controller;
use App\Services\ManufactureService;
use Illuminate\Support\Facades\Auth;

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
    public function show(string $id, StoreService $storeService, DepartmentService $departmentService, BrandService $brandService, CarService $carService, ManufactureService $manufactureService, ProductService $productService, WishlistService $wishlistService)
    {
        $store = $storeService->findById($id);
        $departments = $departmentService->all();
        $brands = $brandService->all();
        $cars = $carService->all();
        $manufactures = $manufactureService->all();
        if(Auth::guard('web')->check()){
            $storeWishlist = $wishlistService->findByColumnWhere('item_id',$id, 'user_id',Auth::guard('web')->user()->id);
        }
        $products = $productService->findByColumn('store_id', $id);
        return view('user.storeItem', get_defined_vars());
    }

    public function search(Request $request, ProductService $productService)
    {
        $products = $productService->whereOrWhere('name', $request->name,'code', $request->name)->where('store_id', $request->store_id);

        $html = view('user.components.find_product', get_defined_vars())->render();

        return Response()->json(['code' => 200, 'data' => ['products' => $html], 'message' => 'Success']);
    }


    public function filter(Request $request, ProductService $productService)
    {
        $products = $productService;
        foreach ($request->except('store_id') as $key => $value) {
            $products = $products->whereIn($key, $value);
        }
        $products = $products->whereIn('store_id', $request->store_id);

        $html = view('user.components.find_product', get_defined_vars())->render();

       return Response()->json(['code' => 200, 'data' => ['products' => $html], 'message' => 'Success']);
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
