<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $validUsers = [
            'aldi keren' => '123123',
        ];

        if (isset($validUsers[$username]) && $validUsers[$username] === $password) {
            return redirect('/dashboard?username=' . urlencode($username));
        }

        return redirect()->route('login')->with('error', 'Username atau password salah');
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

        $books = [
            ['judul' => 'Laskar Pelangi', 'pengarang' => 'Andrea Hirata', 'tahun' => 2005],
            ['judul' => 'Bumi', 'pengarang' => 'Tere Liye', 'tahun' => 2014],
            ['judul' => 'Negeri 5 Menara', 'pengarang' => 'Ahmad Fuadi', 'tahun' => 2009],
        ];

        return view('pengelolaan', compact('username', 'books'));
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
