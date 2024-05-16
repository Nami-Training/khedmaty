<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.Home');
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
}
