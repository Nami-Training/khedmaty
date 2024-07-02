<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\AdminService;
use App\Services\ActionService;
use App\Http\Trait\FileHandling;
use Yajra\DataTables\DataTables;
use App\Services\PermissionService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminsController extends Controller
{
    use FileHandling;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorizeForUser(Auth::guard('admin')->user(), 'viewUSer');

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
        $this->authorizeForUser(Auth::guard('admin')->user(), 'createUser');

        $permissions = ['banners', 'store_categories', 'departments', 'categories', 'brands', 'cars', 'stores', 'clients', 'products', 'orders', 'faqs', 'testimonials', 'blogs', 'settings'];
        $html = view('admin.windows.admins', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, AdminService $adminService, PermissionService $permissionService, ActionService $actionService)
    {
        $data = [];
        if(isset($request->permissions)){
            foreach($request->permissions as $key => $value){
                $data[$key] = 1;
            }
        }
        $permission = $permissionService->create($data);

        if(isset($request->permissions)){
            foreach ($request->permissions as $key => $value) {
                $actions = ['permission_id' => $permission->id, 'name' => $key];
                foreach ($value as $item) {
                    $actions[$item] = 1;
                }
                $action = $actionService->create($actions);
            }
        }

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
        $this->authorizeForUser(Auth::guard('admin')->user(), 'updateUser');

        $admin = $adminService->findById($id);
        $actions  = [
            'users' => [0,0,0,0],
            'banners' => [0,0,0,0],
            'store_categories' => [0,0,0,0],
            'departments' => [0,0,0,0],
            'categories' => [0,0,0,0],
            'brands' => [0,0,0,0],
            'cars' => [0,0,0,0],
            'stores' => [0,0,0,0],
            'clients' => [0,0,0,0],
            'products' => [0,0,0,0],
            'orders' => [0,0,0,0],
            'faqs' => [0,0,0,0],
            'testimonials' => [0,0,0,0],
            'blogs' => [0,0,0,0],
            'settings' => [0,0,0,0]
        ];
        foreach ($admin->permission->actions as $action) {
            $actions[$action['name']] = [$action['create'],$action['read'],$action['update'],$action['delete']];
        }
        $permissions = ['banners', 'store_categories', 'departments', 'categories', 'brands', 'cars', 'stores', 'clients', 'products', 'orders', 'faqs', 'testimonials', 'blogs', 'settings'];
        $html = view('admin.windows.admins', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, AdminService $adminService, PermissionService $permissionService, ActionService $actionService)
    {
        $data = [];
        if(isset($request->permissions)){
            foreach($request->permissions as $key => $value){
                $data[$key] = 1;
            }
        }

        $admin = $adminService->findById($id);
        $actionService->deleteWhere('permission_id', $admin->permission_id);
        $permissionService->delete($admin->permission_id);

        $permission = $permissionService->create($data);

        if(isset($request->permissions)){
            foreach ($request->permissions as $key => $value) {
                $actions = ['permission_id' => $permission->id, 'name' => $key];
                foreach ($value as $item) {
                    $actions[$item] = 1;
                }
                $action = $actionService->create($actions);
            }
        }

        if ($adminService->update($id,[
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'permission_id' => $permission->id
        ])) {
            return Response()->json(['code' => 200, 'message' => 'Updated Successfully']);
        }

        return Response()->json(['code' => 400, 'message' =>  'Cant update this item']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, AdminService $adminService)
    {
        $this->authorizeForUser(Auth::guard('admin')->user(), 'deleteUser');

        $admin = $adminService->findById($id);
        $this->deleteFile($admin->image);
        $adminService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }
}
