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
        return view('dashboard', compact('username'));
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');

        $peminjaman = [
            [
                'judul' => 'Laskar Pelangi',
                'peminjam' => 'King Anap',
                'tanggal_pinjam' => '2025-05-01',
                'tanggal_kembali' => '2025-05-15',
                'status' => 'Dipinjam',
            ],
            [
                'judul' => 'Bumi',
                'peminjam' => 'Sal Priadi',
                'tanggal_pinjam' => '2025-04-28',
                'tanggal_kembali' => '2025-05-12',
                'status' => 'Dikembalikan',
            ],
            [
                'judul' => 'Negeri 5 Menara',
                'peminjam' => 'Depis Fernandez',
                'tanggal_pinjam' => '2025-04-20',
                'tanggal_kembali' => '2025-05-04',
                'status' => 'Terlambat',
            ],
            [
                'judul' => 'Filosofi Teras',
                'peminjam' => 'Kylian Zakir',
                'tanggal_pinjam' => '2025-04-25',
                'tanggal_kembali' => '2025-05-09',
                'status' => 'Dipinjam',
            ],
            [
                'judul' => 'Atomic Habits',
                'peminjam' => 'Erling Rifqi',
                'tanggal_pinjam' => '2025-04-18',
                'tanggal_kembali' => '2025-05-02',
                'status' => 'Dikembalikan',
            ],
            [
                'judul' => 'Rich Dad Poor Dad',
                'peminjam' => 'Lionel Aldi',
                'tanggal_pinjam' => '2025-04-22',
                'tanggal_kembali' => '2025-05-06',
                'status' => 'Terlambat',
            ],
            [
                'judul' => 'Harry Potter',
                'peminjam' => 'Didier Rafi',
                'tanggal_pinjam' => '2025-05-02',
                'tanggal_kembali' => '2025-05-16',
                'status' => 'Dipinjam',
            ],
            [
                'judul' => 'The Alchemist',
                'peminjam' => 'Alfarez',
                'tanggal_pinjam' => '2025-04-30',
                'tanggal_kembali' => '2025-05-14',
                'status' => 'Dipinjam',
            ],
            [
                'judul' => 'Dilan 1990',
                'peminjam' => 'Messi',
                'tanggal_pinjam' => '2025-04-10',
                'tanggal_kembali' => '2025-04-24',
                'status' => 'Dikembalikan',
            ],
            [
                'judul' => 'Ayat-Ayat Cinta',
                'peminjam' => 'Lamine Yamal',
                'tanggal_pinjam' => '2025-04-05',
                'tanggal_kembali' => '2025-04-19',
                'status' => 'Terlambat',
            ],
        ];

        return view('pengelolaan', compact('username', 'peminjaman'));
    }


    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }
}
