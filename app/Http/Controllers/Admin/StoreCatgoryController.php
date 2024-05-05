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
            return '<button type="button" class="btn btn-primary editButton" data-bs-toggle="modal" data-bs-target="#createModal" model-route="'.route('storeCategoies.edit', $storeCategory->id).'" model-title=" "> <i class="fa fa-pencil"></i> </button>
            <button type="button" class="btn btn-danger deleteButton"  delete-route="'.route('storeCategoies.destroy', $storeCategory->id).'"> <i class="fa fa-trash-o"></i> </button>';
        })
        ->rawColumns(['image', 'action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $html = '<form class="row g-3 from-submit-global" method="post" action="'.route('storeCategoies.store').'" " enctype="multipart/form-data"> '.csrf_field(). '
            <div class="col-12">
                <label for="TextInput" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" data-validation="required">
            </div>
            <div class="col-6">
                <label for="TextInput" class="form-label">Description</label>
                <textarea class="form-control" rows="10" name="description"></textarea>
            </div>
            <div class="col-6">
                <label for="TextInput" class="form-label">Image  </label>
                <input type="file" name="image" class="dropify">
            </div>
            <div class="col-12 modal-footer">
                <button class="btn btn-primary" type="submit">Save</button>
                <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Colse</button>
            </div>
        </form>"';
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
        $html = '<form class="row g-3 from-submit-global" method="post" action="'.route('storeCategoies.update', $storeCategory->id).'" " enctype="multipart/form-data"> '.csrf_field(). '' .method_field('put').'
            <div class="col-12">
                <label for="TextInput" class="form-label">Name</label>
                <input type="text" name="name" value="'.$storeCategory->name.'" class="form-control" data-validation="required">
            </div>
            <div class="col-6">
                <label for="TextInput" class="form-label">Description</label>
                <textarea class="form-control" rows="10" name="description">'.$storeCategory->description.'</textarea>
            </div>
            <div class="col-6">
                <label for="TextInput" class="form-label">Image  </label>
                <input type="file" data-default-file="'.asset($storeCategory->image).'"  name="image" class="dropify">
            </div>
            <div class="col-12 modal-footer">
                <button class="btn btn-primary" type="submit">Save</button>
                <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Colse</button>
            </div>
        </form>"';
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
