@extends('layouts.app')

@section('content')
    <div class="flex items-center space-x-4 mb-4">
        @if($username)
            <span class="text-sm text-gray-900 mr-4">Halo, {{ $username }}</span>
        @endif
    </div>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Dashboard Perpustakaan Mini</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h2 class="text-lg font-semibold text-gray-700">Total Buku</h2>
                <p class="text-3xl font-bold text-indigo-600 mt-2">10</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h2 class="text-lg font-semibold text-gray-700">Buku Tersedia</h2>
                <p class="text-3xl font-bold text-green-600 mt-2">3</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h2 class="text-lg font-semibold text-gray-700">Buku Dipinjam</h2>
                <p class="text-3xl font-bold text-red-600 mt-2">7</p>
            </div>
        </div>

        <div class="container mx-auto mt-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Buku Tersedia</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded shadow">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="py-3 px-4 text-left">Judul</th>
                            <th class="py-3 px-4 text-left">Peminjam Terakhir</th>
                            <th class="py-3 px-4 text-left">Tanggal Dikembalikan</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="border-b">
                            <td class="py-3 px-4">Bumi</td>
                            <td class="py-3 px-4">Sal Priadi</td>
                            <td class="py-3 px-4">2025-05-12</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 px-4">Atomic Habits</td>
                            <td class="py-3 px-4">Erling Rifqi</td>
                            <td class="py-3 px-4">2025-05-02</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 px-4">Dilan 1990</td>
                            <td class="py-3 px-4">Messi</td>
                            <td class="py-3 px-4">2025-04-24</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
