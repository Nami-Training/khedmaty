<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Trait\FileHandling;

class CategoryController extends Controller
{
    use FileHandling;
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
            $editRoute = route('categories.edit', $category->id);
            $destroyRoute = route('categories.destroy', $category->id);
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
        $html = view('admin.windows.category')->render();
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
        $html = view('admin.windows.category', get_defined_vars())->render();
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
        $category = $categoryService->findById($id);
        $this->deleteFile($category->image);
        $categoryService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }
}
