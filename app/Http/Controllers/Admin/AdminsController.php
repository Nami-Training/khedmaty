<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\AdminService;
use Yajra\DataTables\DataTables;
use App\Http\Requests\AdminRequest;
use App\Http\Controllers\Controller;
use App\Services\PermissionService;
use Illuminate\Support\Facades\Hash;
use App\Http\Trait\FileHandling;

class AdminsController extends Controller
{
    use FileHandling;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admins', get_defined_vars());
    }

    public function getAll(AdminService $adminService)
    {
        $admins = $adminService->all();
        return DataTables::of($admins)
        ->addColumn('id', function ($admin) {
            return $admin->id;
        })
        ->addColumn('name', function ($admin) {
            return $admin->name;
        })
        ->addColumn('phone', function ($admin) {
            return $admin->phone;
        })
        ->addColumn('email', function ($admin) {
            return $admin->email;
        })
        ->addColumn('action', function($admin){
            $editRoute = route('admins.edit', $admin->id);
            $destroyRoute = route('admins.destroy', $admin->id);
            $AdminId = $admin->id;
            return view('admin.windows.action_button', get_defined_vars())->render();
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $html = view('admin.windows.admins')->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, AdminService $adminService, PermissionService $permissionService)
    {
        foreach($request->permissions as $permission){
            $data[$permission] = 1;
        }
        $permission = $permissionService->create($data);

        $admin = $adminService->create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => 'assets/img/user.png',
            'permission_id' => $permission->id
        ]);

        if ($admin) {
            return Response()->json(['code' => 200, 'data' => ['admin' => $admin], 'message' => 'Added Successfully']);
        }
        return Response()->json(['code' => 400, 'message' =>  'Cant Add this item']);
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
    public function edit(string $id, AdminService $adminService)
    {
        $admin = $adminService->findById($id);
        $html = view('admin.windows.admins', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, AdminService $adminService, PermissionService $permissionService)
    {
        foreach($request->permissions as $permission){
            $data[$permission] = 1;
        }
        $admin = $adminService->findById($id);
        $permission = $permissionService->create($data);

        if ($adminService->update($id,[
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'permission_id' => $permission->id
        ])) {
            $permissionService->delete($admin->permission_id);
            return Response()->json(['code' => 200, 'message' => 'Updated Successfully']);
        }

        return Response()->json(['code' => 400, 'message' =>  'Cant update this item']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, AdminService $adminService)
    {
        $admin = $adminService->findById($id);
        $this->deleteFile($admin->image);
        $adminService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }
}
