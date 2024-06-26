<?php

namespace App\Http\Controllers\Api\store;

use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Services\OfferService;
use App\Services\ProductService;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Trait\FileHandling;

class ProductController extends Controller
{
    use FileHandling;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request,ProductService $productService)
    {
        return response()->json([
            'data' => [
                'products' => ProductResource::collection($productService->findByColumn('store_id', $request->store_id))
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
    public function store(Request $request, ProductService $productService, OfferService $offerService, ImageService $imageService)
    {
        // dd($request->all());
        if($request->have_offer == 'on'){
            $offer = $offerService->create([
                'type' => $request->offer_type,
                'value' => $request->offer_value,
                'from_date' => $request->from_date,
                'to_date' => $request->to_date
            ]);
        }

        $code = str_pad(mt_rand(1, 9999999), 7, '0', STR_PAD_LEFT);
        while (count($productService->findByColumn('code', $code))) {
            $code = str_pad(mt_rand(1, 9999999), 7, '0', STR_PAD_LEFT);
        }

        $product = $productService->create([
            'name' => $request->name,
            'description' => $request->description,
            'code' => $code,
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
            return response()->json([
                'data' => [
                    'product' => ProductResource::make($product),
                    'message' => 'Product Added Successfully'
                ],
                'error' => ''
            ],200);
        }

        return response()->json([
            'data' => [
            ],
            'error' => 'Cant Add this item'
        ],422);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,string $id, ProductService $productService)
    {
        return response()->json([
            'data' => [
                'products' => ProductResource::collection($productService->where('store_id', $request->store_id)->where('id', $id))
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
    public function update(Request $request, string $id, ProductService $productService, OfferService $offerService, ImageService $imageService)
    {
        $product = $productService->findById($id);
        if($product->store_id == $request->store_id)
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
                return response()->json([
                    'data' => [
                        'product' => ProductResource::make($product),
                        'message' => 'Updated Successfully'
                    ],
                    'error' => ''
                ],200);
            }

            return response()->json([
                'data' => [
                ],
                'error' => 'Cant Add this item'
            ],422);
        }

        return response()->json([
            'data' => [
            ],
            'error' => 'this product didnt belongs to this store!'
        ],422);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id, ProductService $productService, ImageService $imageService)
    {
        $product = $productService->findById($id);
        if($product->store_id == $request->store_id){

            $imageService->deleteWhere('item_id', $id);
            $productService->delete($id);
            return response()->json([
                'data' => [
                    'message' => 'product deleted successfully!'
                ],
                'error' => ''
            ],200);
        }

        return response()->json([
            'data' => [],
            'error' => 'the product might be not exists or the product didnt belong to this store!'
        ],422);
    }
}
