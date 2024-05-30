<?php

namespace App\Http\Controllers\Admin;

use App\Services\CarService;
use Illuminate\Http\Request;
use App\Services\BrandService;
use App\Services\ImageService;
use App\Services\OfferService;
use App\Services\StoreService;
use App\Http\Trait\FileHandling;
use App\Services\ProductService;
use Yajra\DataTables\DataTables;
use App\Services\CategoryService;
use App\Services\DepartmentService;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Services\ManufactureService;
use App\Services\RateService;

class ProdcutController extends Controller
{
    use FileHandling;
    /**
     * Display a listing of the resource.
     */
    public function index(StoreService $storeService)
    {
        $stores = $storeService->all();
        return view('admin.products', get_defined_vars());
    }

    public function getAll(ProductService $productService)
    {
        $products = $productService->all();
        return DataTables::of($products)
        ->addColumn('id', function ($product) {
            return $product->id;
        })
        ->addColumn('name', function ($product) {
            return $product->name;
        })
        ->addColumn('price', function ($product) {
            return $product->price;
        })
        ->addColumn('department', function ($product) {
            return $product->department->name;
        })
        ->addColumn('store', function ($product) {
            return $product->store->name;
        })
        ->addColumn('offer', function ($product) {
            return $product->offer_id > 1 ? 'Yes' : 'No';
        })
        ->addColumn('image', function ($product, ImageService $imageService) {
            $item = $imageService->findByColumn('item_id',$product->id);
            return '<img src="' .asset($item[0]->image) . '" width="70" height="50">';
        })
        ->addColumn('rate', function ($product, RateService $rateService) {
            $rates = count($rateService->findByColumn('product_id', $product->id));
            return '<a type="button" class="btn btn-primary" href="https://khidmty.com/ar/admin/rates?product_id=1">
                        <i class="fa fa-show"></i>'.$rates.'
                    </a>';
        })
        ->addColumn('orders', function ($product) {
            return  '<a type="button" class="btn btn-primary" href="https://khidmty.com/ar/admin/rates?product_id=1">
                        <i class="fa fa-show"></i>Orders
                    </a>';
        })
        ->addColumn('action', function($product){
            $editRoute = route('products.edit', $product->id);
            $destroyRoute = route('products.destroy', $product->id);
            return view('admin.windows.action_button', get_defined_vars())->render();
        })
        ->rawColumns(['image', 'rate', 'orders', 'action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CategoryService $categoryService, StoreService $storeService, DepartmentService $departmentService, BrandService $brandService, CarService $carService, ManufactureService $manufactureService)
    {
        $categories = $categoryService->all();
        $stores = $storeService->all();
        $departments = $departmentService->all();
        $brands = $brandService->all();
        $cars = $carService->all();
        $manufactures = $manufactureService->all();
        $html = view('admin.windows.product', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ProductService $productService, OfferService $offerService, ImageService $imageService)
    {
        if($request->have_offer == 'on'){
            $offer = $offerService->create([
                'type' => $request->offer_type,
                'value' => $request->offer_value,
                'from_date' => $request->from_date,
                'to_date' => $request->to_date
            ]);
        }

        $product = $productService->create([
            'name' => $request->name,
            'description' => $request->description,
            'code' => $request->code,
            'price' => $request->price,
            'type' => $request->type,
            'category_id' => $request->category_id,
            'store_id' => $request->store_id,
            'department_id' => $request->department_id,
            'offer_id' => isset($offer) ? $offer->id : 1
        ]);

        foreach ($request->images_list as $image) {
            $path = $this->uplaodFile($image, 'attachments/products/');
            $imageService->create([
                'item_id' => $product->id,
                'image' => $path
            ]);
        }

        if($request->product_list){
            $brands_list = $request->product_list['brand_id'];
            $cars_list = $request->product_list['car_id'];
            $models_list = $request->product_list['manufacture_year'];

            foreach ($brands_list as $id) {
                $product->brands()->attach($id);
            }
            foreach ($cars_list as $id) {
                $product->cars()->attach($id);
            }
            foreach ($models_list as $id) {
                $product->manufactures()->attach($id);
            }
        }

        if ($product) {
            return Response()->json(['code' => 200, 'data' => ['product' => $product], 'message' => 'Added Successfully']);
        }

        return Response()->json(['code' => 400, 'message' =>  'Cant Add this item']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, ProductService $productService, CategoryService $categoryService, StoreService $storeService, DepartmentService $departmentService, BrandService $brandService, CarService $carService, ManufactureService $manufactureService, OfferService $offerService, ImageService $imageService)
    {
        $categories = $categoryService->all();
        $stores = $storeService->all();
        $departments = $departmentService->all();
        $brands = $brandService->all();
        $cars = $carService->all();
        $manufactures = $manufactureService->all();
        $product = $productService->findById($id);
        $offer = $offerService->findById($product->offer_id);
        $images = $imageService->findByColumn('item_id',$product->id);
        $html = view('admin.windows.product', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, ProductService $productService, OfferService $offerService, ImageService $imageService)
    {
        if($request->have_offer == 'on'){
            $offer = $offerService->create([
                'type' => $request->offer_type,
                'value' => $request->offer_value,
                'from_date' => $request->from_date,
                'to_date' => $request->to_date
            ]);
        }

        $productService->update($id,[
            'name' => $request->name,
            'description' => $request->description,
            'code' => $request->code,
            'price' => $request->price,
            'type' => $request->type,
            'category_id' => $request->category_id,
            'store_id' => $request->store_id,
            'department_id' => $request->department_id,
            'offer_id' => isset($offer) ? $offer->id : 1
        ]);

        $product = $productService->findById($id);

        if($request->product_list){
            $brands_list = $request->product_list['brand_id'];
            $cars_list = $request->product_list['car_id'];
            $manufactures = $request->product_list['manufacture_year'];
            $product->brands()->detach();
            $product->cars()->detach();
            $product->manufactures()->detach();

            foreach ($brands_list as $id) {
                $product->brands()->attach($id);
            }
            foreach ($cars_list as $id) {
                $product->cars()->attach($id);
            }
            foreach ($manufactures as $id) {
                $product->manufactures()->attach($id);
            }
        }

        if(isset($request->images_list)){
            foreach ($request->images_list as $index => $image) {
                $pImage = $imageService->findById($index);
                $this->deleteFile($pImage->image);
                $path = $this->uplaodFile($image, 'attachments/products/');
                $pImage->update([
                    'image' => $path
                ]);
            }
        }



        if ($product) {
            return Response()->json(['code' => 200, 'message' => 'Updated Successfully']);
        }

        return Response()->json(['code' => 400, 'message' =>  'Cant Add this item']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, ProductService $productService, ImageService $imageService)
    {
        $imageService->deleteWhere('item_id', $id);
        $productService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }
}
