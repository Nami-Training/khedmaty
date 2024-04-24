<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return redirect()->route('admin.dashboard')->with('error', 'Admin Login Successfully!');
        }else{
            return back()->with('error', 'Invalid Email Or Password!');
        }
    }

    public function signUp()
    {

    }
}
