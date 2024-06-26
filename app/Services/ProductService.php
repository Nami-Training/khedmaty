<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Trait\FileHandling;
use App\Models\CarModel;

class ProductService extends MainService
{
    use FileHandling;

    public function __construct()
    {
        parent::__construct(new Product);
    }


    public function moreSold()
    {
        return Product::withCount('orderProducts')->orderBy('order_products_count', 'desc')->orderBy('price', 'desc')->get();
    }

    public function moreSold_store($id)
    {
        return Product::where('store_id' , $id)->withCount('orderProducts')->orderBy('order_products_count', 'desc')->orderBy('price', 'desc')->limit(5)->get();
    }

    public function search($name, $id)
    {
        return $this->whereOrWhere('name', $name,'code', $name)->where('department_id', $id);
    }

    public function filter($id, Request $request)
    {
        $brands_ids = $request->brand_id;
        $cars_ids = $request->car_id;
        $manufacture_years_ids = $request->manufacture_year;

        return Product::where('department_id', $id)->with(['brands', 'cars', 'manufactures'])
        ->whereHas('brands', function ($query) use($brands_ids) {
            if(isset($brands_ids)){
                $query->whereIn('brand_id', $brands_ids);
            }
        })->whereHas('cars', function ($query) use($cars_ids) {
            if(isset($cars_ids)){
                $query->whereIn('car_id', $cars_ids);
            }
        })->whereHas('manufactures', function ($query) use($manufacture_years_ids) {
            if(isset($manufacture_years_ids)){
                $query->whereIn('year', $manufacture_years_ids);
            }
        })->get();
    }


    public function favourits($id)
    {
        return Product::with(['wishlist'])
        ->whereHas('wishlist', function ($query) use($id) {
            if(isset($id)){
                $query->where('user_id', $id)->where('type', 'product');
            }
        })->get();
    }
}
