<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Services\AdminService;
use App\Http\Trait\FileHandling;
use App\Services\PermissionService;
use Illuminate\Validation\Rules;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    use FileHandling;

    public function index()
    {
        return view('admin.dashboard');
    }

    public function signInForm()
    {
        return view('admin.signIn');
    }

    public function signUpForm()
    {
        return view('admin.signUp');
    }

    public function signIn(Request $request)
    {
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('admin.dashboard')->with('success', 'Admin Login Successfully!');
        }else{
            return back()->with('error', 'Invalid Email Or Password!');
        }
    }

    public function signUp(Request $request, PermissionService $permissionService)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:11'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'image' =>'image|mimes:jpeg,jpg,png,gif|max:2048|required',
        ]);

        $path = $this->uplaodFile($request->image, 'attachments/admins/');
        $permission =  $permissionService->create([]);

        $admin = Admin::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $path,
            'permission_id' => $permission->id,
        ]);

        return redirect()->route('login_form')->with('success', 'Admin Created Successfully!');
        // Auth::guard('admin')->login($admin);
    }

    public function logOut()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with('success', 'Admin LogOut Successfully!');
    }

    public function myProfile($id, AdminService $adminService)
    {
        $currentAdmin = $adminService->findById($id);
        return view('admin.profile', get_defined_vars());
    }

    public function updateProfile(Request $request, $id, AdminService $adminService)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:11'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'image' =>'image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        if ($adminService->updateAdmin($id,$request)) {
            return Response()->json(['code' => 201, 'message' => 'Updated Successfully']);
        } else {
            return Response()->json(['code' => 400, 'message' =>  'Cant update this item']);
        }
    }

    public function changePassword(Request $request, $id, AdminService $adminService)
    {
        $request->validate([
            'current_password' => ['required', Rules\Password::defaults()],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $admin = $adminService->findById($id);
        if (Hash::check($request->current_password, $admin->password)) {
            if ($adminService->updatePassword($id,$request->password)) {
                return Response()->json(['code' => 201, 'message' => 'Updated Successfully']);
            } else {
                return Response()->json(['code' => 400, 'message' =>  'Cant update this item']);
            }
          } else {
            return Response()->json(['code' => 400, 'message' =>  'current passwoed in wrong!']);
          }
    }
}
