<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Services\DepartmentService;
use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentRequest;
use App\Services\StoreCategoryService;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.departments');
    }

    public function getAll(DepartmentService $departmentService)
    {
        $departments = $departmentService->all();
        return DataTables::of($departments)
        ->addColumn('id', function ($department) {
            return $department->id;
        })
        ->addColumn('name', function ($department) {
            return $department->name;
        })
        ->addColumn('image', function ($department) {
            return '<img src="' .asset($department->image) . '" width="70" height="50">';
        })
        ->addColumn('action', function($department){
            $editRoute = route('departments.edit', $department->id);
            $destroyRoute = route('departments.destroy', $department->id);
            return view('admin.windows.action_button', get_defined_vars())->render();
        })
        ->rawColumns(['image', 'action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StoreCategoryService $storeCategoryService)
    {
        $storesCategories = $storeCategoryService->all();
        $html = view('admin.windows.department', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartmentRequest $request, DepartmentService $departmentService)
    {
        $department = $departmentService->createDepartment($request->validated(), $request->image);

        if ($department) {
            return Response()->json(['code' => 200, 'data' => ['department' => $department], 'message' => 'Added Successfully']);
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
    public function edit(string $id, StoreCategoryService $storeCategoryService, DepartmentService $departmentService)
    {
        $storesCategories = $storeCategoryService->all();
        $department = $departmentService->findById($id);
        $html = view('admin.windows.department', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, DepartmentService $departmentService)
    {
        if ($departmentService->updateDepartment($id,$request)) {
            return Response()->json(['code' => 200, 'message' => 'Updated Successfully']);
        }
        return Response()->json(['code' => 400, 'message' =>  'Cant update this item']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, DepartmentService $departmentService)
    {
        $departmentService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }
}
