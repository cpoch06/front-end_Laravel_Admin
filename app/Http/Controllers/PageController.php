<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function home()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('dashboard');
    }


    public function signin()
    {
        return view('signin');
    }

    public function signup()
    {
        return view('signup');
    }

    public function forgotPassword()
    {
        return view('forgot-password');
    }

    
}
