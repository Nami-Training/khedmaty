<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\BrandService;
use Yajra\DataTables\DataTables;
use App\DataTables\SlidersDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.brands');
    }

    public function getAll(BrandService $brandService)
    {
        $brands = $brandService->all();
        return DataTables::of($brands)
        ->addColumn('id', function ($brand) {
            return $brand->id;
        })
        ->addColumn('name', function ($brand) {
            return $brand->name;
        })
        ->addColumn('image', function ($brand) {
            return '<img src="' .asset($brand->image) . '" width="70" height="50">';
        })
        ->addColumn('action', function($brand){
            $editRoute = route('brands.edit', $brand->id);
            $destroyRoute = route('brands.destroy', $brand->id);
            return view('admin.windows.action_button', get_defined_vars())->render();
        })
        ->rawColumns(['image', 'action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $html = view('admin.windows.brand')->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request, BrandService $brandService)
    {
        $brand = $brandService->createBrand($request->validated(), $request->image);

        if ($brand) {
            return Response()->json(['code' => 200, 'data' => ['brand' => $brand], 'message' => 'Added Successfully']);
        } else {
            return Response()->json(['code' => 400, 'message' =>  'Cant Add this item']);
        }
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
    public function edit(string $id, BrandService $brandService)
    {
        $brand = $brandService->findById($id);
        $html = view('admin.windows.brand', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, BrandService $brandService)
    {
        if ($brandService->updateBrand($id,$request)) {
            return Response()->json(['code' => 200, 'message' => 'Updated Successfully']);
        } else {
            return Response()->json(['code' => 400, 'message' =>  'Cant update this item']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, BrandService $brandService)
    {
        $brandService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }
}
