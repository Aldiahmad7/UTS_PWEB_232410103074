<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function pengelolaan()
    {
        return view('pengelolaan');
    }

    public function profile()
    {
        return view('profile');
    }
}
