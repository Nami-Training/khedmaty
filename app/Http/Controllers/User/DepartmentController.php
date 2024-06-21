<?php

namespace App\Http\Controllers\User;

use App\Services\CarService;
use Illuminate\Http\Request;
use App\Services\BrandService;
use App\Services\StoreService;
use App\Services\ProductService;
use App\Services\WishlistService;
use App\Services\DepartmentService;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\ManufactureService;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DepartmentService $departmentService)
    {
        $departments = $departmentService->all();
        return view('user.deparments', get_defined_vars());
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
        $department = $departmentService->findById($id);
        $brands = $brandService->all();
        $cars = $carService->all();
        $manufactures = $manufactureService->all();
        if(Auth::guard('web')->check()){
            $storeWishlist = $wishlistService->findByColumnWhere('item_id',$id, 'user_id',Auth::guard('web')->user()->id);
        }
        $products = $productService->findByColumn('department_id', $id);
        return view('user.departmentItem', get_defined_vars());
    }

    public function search(Request $request, ProductService $productService)
    {
        $products = $productService->search($request->name, $request->department_id);

        $html = view('user.components.find_product', get_defined_vars())->render();

        return Response()->json(['code' => 200, 'data' => ['products' => $html], 'message' => 'Success']);
    }

    public function filter(Request $request, ProductService $productService)
    {
        $products = $productService->filter($request->department_id, $request);

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
