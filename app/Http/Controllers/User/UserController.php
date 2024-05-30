<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\BlogService;
use App\Services\UserService;
use App\Services\StoreService;
use App\Services\SliderService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Services\StoreCategoryService;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Flash;

class UserController extends Controller
{
    public function index(SliderService $sliderService, StoreCategoryService $storeCategoryService, StoreService $storeService, BlogService $blogService)
    {
        $sliders = $sliderService->all();
        $storesCategories = $storeCategoryService->limit(3);
        $stores = $storeService->limit(5);
        $blogs = $blogService->limit(3);
        return view('user.Home', get_defined_vars());
    }

    public function contactUsForm()
    {
        return view('user.contact-us');
    }

    public function contactUs(Request $request)
    {
        return redirect()->back();
    }

    public function aboutUs()
    {
        return view('user.about-us');
    }

    public function privacyPolicy()
    {
        return view('user.privacy-policy');
    }

    public function termsConditions()
    {
        return view('user.termsConditions');
    }

    public function faqs()
    {
        return view('user.faqs');
    }

    public function allCategories(StoreCategoryService $storeCategoryService)
    {
        $storesCategories = $storeCategoryService->all();
        return view('user.storeCategory', get_defined_vars());
    }

    public function auth()
    {
        return view('user.auth');
    }

    public function login(LoginRequest $request)
    {
       if($request->submit == 'client'){
            if(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'type'=>$request->submit])){
                return redirect()->route('home')->with('success', 'User Login Successfully!');
            }else{
                return back()->with('error', 'Invalid Email Or Password!');
            }
       }elseif($request->submit == 'store'){
            if(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'type'=>$request->submit])){
                return redirect()->route('home')->with('error', 'store Login Successfully!');
            }else{
                return back()->with('error', 'Invalid Email Or Password!');
            }
       }
    }

    public function authSignUp()
    {
        return view('user.authSignUp');
    }

    public function register(UserRequest $request, UserService $userService)
    {
        $userService->createUser([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'type' => $request->type == 'on' ? 'store' : 'client',
            'password' => Hash::make($request->password)
        ], $request->image);

        return redirect()->route('auth')->with('success', 'User Created Successfully!');
    }

    public function myProfile()
    {
        return view('user.profile');
    }

    public function UpdateProfile($id, Request $request, UserService $userService)
    {
        if ($userService->updateUser($id,$request)) {
            // toastr('Your profile was updated!');
            return redirect()->route('myProfile')->with('success', 'Updated Successfully!');
            // return Response()->json(['code' => 201, 'message' => 'Updated Successfully']);
        } else {
            return redirect()->route('myProfile')->with('error', 'Error in Updating!');
            // return Response()->json(['code' => 400, 'message' =>  'Cant update this item']);
        }
    }

    public function logOut()
    {
        Auth::guard('web')->logout();
        return redirect()->route('auth');
    }

    public function deleteAccount($id, UserService $userService)
    {
        $userService->delete($id);
        return redirect()->route('auth')->with('success', 'Account deleted successfully!');
    }
}
