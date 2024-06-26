<?php

namespace App\Http\Controllers\Api\user;

use App\Services\BlogService;
use App\Services\StoreService;
use App\Services\SliderService;
use App\Services\ProductService;
use App\Services\DepartmentService;
use App\Http\Controllers\Controller;
use App\Http\Resources\DepartmentResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SliderResource;
use App\Http\Resources\StoreCategoryResource;
use App\Http\Resources\StoreResource;
use App\Services\StoreCategoryService;

class HomeController extends Controller
{
    public function index(SliderService $sliderService, StoreCategoryService $storeCategoryService, StoreService $storeService, BlogService $blogService, DepartmentService $departmentService, ProductService $productService)
    {

        return response()->json([
            'data' => [
                'sliders' => SliderResource::collection($sliderService->all()),
                'storesCategories' => StoreCategoryResource::collection($storeCategoryService->limit(3)),
                'stores' => StoreResource::collection($storeService->limit(5)),
                'departments' => DepartmentResource::collection($departmentService->all()),
                'moreSold' => ProductResource::collection($productService->moreSold()),
            ],
            'error' => ''
        ],200);
    }
}
