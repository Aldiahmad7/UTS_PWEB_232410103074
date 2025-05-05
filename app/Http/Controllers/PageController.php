<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        if (!$request->has('username')) {
            return redirect()->route('login');
        }

        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        if (!$request->has('username')) {
            return redirect()->route('login');
        }

        $username = $request->query('username');
        return view('pengelolaan', compact('username'));
    }

    public function profile(Request $request)
    {
        if (!$request->has('username')) {
            return redirect()->route('login');
        }

        $username = $request->query('username');
        return view('profile', compact('username'));
    }
}
