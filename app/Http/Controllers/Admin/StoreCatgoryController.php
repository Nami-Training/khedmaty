<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Services\StoreCategoryService;

class StoreCatgoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.storesCategories');
    }

    public function getAll(StoreCategoryService $storeCategoryService)
    {
        $storesCategories = $storeCategoryService->all();
        return DataTables::of($storesCategories)
        ->addColumn('id', function ($storeCategory) {
            return $storeCategory->id;
        })
        ->addColumn('name', function ($storeCategory) {
            return $storeCategory->name;
        })
        ->addColumn('description', function ($storeCategory) {
            return $storeCategory->description;
        })
        ->addColumn('image', function ($storeCategory) {
            return '<img src="' .asset($storeCategory->image) . '" width="70" height="50">';
        })
        ->addColumn('action', function($storeCategory){
            $editRoute = route('storeCategoies.edit', $storeCategory->id);
            $destroyRoute = route('storeCategoies.destroy', $storeCategory->id);
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
        $html = view('admin.windows.storeCategory')->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request, StoreCategoryService $storeCategoryService)
    {
        $storeCategory = $storeCategoryService->createStoreCategory($request->validated(), $request->image);

        if ($storeCategory) {
            return Response()->json(['code' => 200, 'data' => ['storeCategory' => $storeCategory], 'message' => 'Added Successfully']);
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
    public function edit(string $id, StoreCategoryService $storeCategoryService)
    {
        $storeCategory = $storeCategoryService->findById($id);
        $html = view('admin.windows.storeCategory', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, StoreCategoryService $storeCategoryService)
    {
        if ($storeCategoryService->updateStoreCategory($id,$request)) {
            return Response()->json(['code' => 200, 'message' => 'Updated Successfully']);
        } else {
            return Response()->json(['code' => 400, 'message' =>  'Cant update this item']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, StoreCategoryService $storeCategoryService)
    {
        $storeCategoryService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }
}
