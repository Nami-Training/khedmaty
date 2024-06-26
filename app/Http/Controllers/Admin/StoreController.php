<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\StoreService;
use Yajra\DataTables\DataTables;
use App\Http\Requests\StoreRequest;
use App\Http\Controllers\Controller;
use App\Services\StoreCategoryService;
use App\Http\Trait\FileHandling;
use App\Models\User;

class StoreController extends Controller
{
    use FileHandling;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.stores');
    }

    public function getAll(StoreService $storeService)
    {
        $stores = $storeService->all();
        return DataTables::of($stores)
        ->addColumn('id', function ($store) {
            return $store->id;
        })
        ->addColumn('name', function ($store) {
            return $store->name;
        })
        ->addColumn('email', function ($store) {
            return $store->email;
        })
        ->addColumn('phone', function ($store) {
            return $store->phone;
        })
        ->addColumn('image', function ($store) {
            return '<img src="' .asset($store->image) . '" width="70" height="50">';
        })
        ->addColumn('offer_status', function ($store) {
            $color = $store->offer_status == '1' ? 'success' : 'danger';
            $status = $store->offer_status == '1' ? 'active' : 'Not Active';
            $ID = $store->id;
            return view('admin.components.changableBtn', get_defined_vars())->render();
        })
        ->addColumn('action', function($store){
            $editRoute = route('stores.edit', $store->id);
            $destroyRoute = route('stores.destroy', $store->id);
            return view('admin.windows.action_button', get_defined_vars())->render();
        })
        ->rawColumns(['image', 'action', 'offer_status'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StoreCategoryService $storeCategoryService)
    {
        $storesCategories = $storeCategoryService->all();
        $html = view('admin.windows.store', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request, StoreService $storeService)
    {
        $client = $storeService->createStore($request->validated(), $request->image, $request->commercial_image);

        if ($client) {
            return Response()->json(['code' => 200, 'data' => ['client' => $client], 'message' => 'Added Successfully']);
        } else {
            return Response()->json(['code' => 400, 'message' =>  'Cant Add this item']);
        }
    }

    public function changeOfferStatus($id, StoreService $storeService)
    {
        if ($storeService->changeOfferStatus($id)) {
            return Response()->json(['code' => 200, 'success' => 'Updated Successfully']);
        } else {
            return Response()->json(['code' => 400, 'faild' =>  'Cant update this item']);
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
    public function edit(string $id, StoreService $storeService, StoreCategoryService $storeCategoryService)
    {
        $storesCategories = $storeCategoryService->all();
        $store = $storeService->findById($id);
        $html = view('admin.windows.store', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, StoreService $storeService)
    {
        if ($storeService->updateStore($id,$request)) {
            return Response()->json(['code' => 200, 'message' => 'Updated Successfully']);
        } else {
            return Response()->json(['code' => 400, 'message' =>  'Cant update this item']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, StoreService $storeService)
    {
        $store = $storeService->findById($id);
        $this->deleteFile($store->image);
        $storeService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }


    public function moreSales()
    {
        return view('admin.moreSales');
    }

    public function moreSalesGetAll()
    {
        $stores = User::withSum('orders', 'total')->orderBy('orders_sum_total', 'desc')->get();
        // $stores = $storeService->all();
        return DataTables::of($stores)
        ->addColumn('id', function ($store) {
            return $store->id;
        })
        ->addColumn('name', function ($store) {
            return $store->name;
        })
        ->addColumn('email', function ($store) {
            return $store->email;
        })
        ->addColumn('phone', function ($store) {
            return $store->phone;
        })
        ->addColumn('image', function ($store) {
            return '<img src="' .asset($store->image) . '" width="70" height="50">';
        })
        ->addColumn('offer_status', function ($store) {
            $color = $store->offer_status == '1' ? 'success' : 'danger';
            $status = $store->offer_status == '1' ? 'active' : 'Not Active';
            $ID = $store->id;
            return view('admin.components.changableBtn', get_defined_vars())->render();
        })
        ->addColumn('totalSales', function($store){
            return $store->orders->sum('total');
        })
        ->rawColumns(['image', 'offer_status'])
        ->make(true);
    }
}
