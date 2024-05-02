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
            return '<button type="button" class="btn btn-primary editButton" data-bs-toggle="modal" data-bs-target="#createModal" model-route="'.route('brands.edit', $brand->id).'" model-title=" "> <i class="fa fa-pencil"></i> </button>
            <button type="button" class="btn btn-danger deleteButton"  delete-route="'.route('brands.destroy', $brand->id).'"> <i class="fa fa-trash-o"></i> </button>';
        })
        ->rawColumns(['image', 'action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $html = '<form class="row g-3 from-submit-global" method="post" action="'.route('brands.store').'" " enctype="multipart/form-data"> '.csrf_field(). '
            <div class="col-6">
                <label for="TextInput" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" data-validation="required">
            </div>
            <div class="col-6">
                <label for="TextInput" class="form-label">Image  </label>
                <input type="file"  name="image" class="dropify">
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
        $html = '<form class="row g-3 from-submit-global" method="post" action="'.route('brands.update', $brand->id).'" " enctype="multipart/form-data"> '.csrf_field(). '' .method_field('put').'
            <div class="col-6">
                <label for="TextInput" class="form-label">Title</label>
                <input type="text" value="'.$brand->name.'" name="name" class="form-control" data-validation="required">
            </div>
            <div class="col-6">
                <label for="TextInput" class="form-label">Image  </label>
                <input type="file" data-default-file="'.asset($brand->image).'"  name="image" class="dropify">
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
