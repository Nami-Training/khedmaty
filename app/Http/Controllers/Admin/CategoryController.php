<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.categories');
    }

    public function getAll(CategoryService $categoryService)
    {
        $categories = $categoryService->all();
        return DataTables::of($categories)
        ->addColumn('id', function ($category) {
            return $category->id;
        })
        ->addColumn('name', function ($category) {
            return $category->name;
        })
        ->addColumn('image', function ($category) {
            return '<img src="' .asset($category->image) . '" width="70" height="50">';
        })
        ->addColumn('action', function($category){
            return '<button type="button" class="btn btn-primary editButton" data-bs-toggle="modal" data-bs-target="#createModal" model-route="'.route('categories.edit', $category->id).'" model-title=" "> <i class="fa fa-pencil"></i> </button>
            <button type="button" class="btn btn-danger deleteButton"  delete-route="'.route('categories.destroy', $category->id).'"> <i class="fa fa-trash-o"></i> </button>';
        })
        ->rawColumns(['image', 'action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $html = '<form class="row g-3 from-submit-global" method="post" action="'.route('categories.store').'" " enctype="multipart/form-data"> '.csrf_field(). '
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
    public function store(CategoryRequest $request, CategoryService $categoryService)
    {
        $category = $categoryService->createBrand($request->validated(), $request->image);

        if ($category) {
            return Response()->json(['code' => 200, 'data' => ['category' => $category], 'message' => 'Added Successfully']);
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
    public function edit(string $id, CategoryService $categoryService)
    {
        $category = $categoryService->findById($id);
        $html = '<form class="row g-3 from-submit-global" method="post" action="'.route('categories.update', $category->id).'" " enctype="multipart/form-data"> '.csrf_field(). '' .method_field('put').'
            <div class="col-6">
                <label for="TextInput" class="form-label">Title</label>
                <input type="text" value="'.$category->name.'" name="name" class="form-control" data-validation="required">
            </div>
            <div class="col-6">
                <label for="TextInput" class="form-label">Image  </label>
                <input type="file" data-default-file="'.asset($category->image).'"  name="image" class="dropify">
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
    public function update(Request $request, string $id, CategoryService $categoryService)
    {
        if ($categoryService->updateBrand($id,$request)) {
            return Response()->json(['code' => 200, 'message' => 'Updated Successfully']);
        } else {
            return Response()->json(['code' => 400, 'message' =>  'Cant update this item']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, CategoryService $categoryService)
    {
        $categoryService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }
}
