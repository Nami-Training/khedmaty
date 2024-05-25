<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

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

    public function signUp(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:11'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $admin = Admin::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login_form')->with('success', 'Admin Created Successfully!');
        // Auth::guard('admin')->login($admin);
    }

    public function logOut()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with('success', 'Admin LogOut Successfully!');
    }
}
